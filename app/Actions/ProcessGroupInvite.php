<?php

namespace App\Actions;

use App\User;
use App\Group;
use App\GroupInvite;
use App\Jobs\SendGroupInvite;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Str;

class ProcessGroupInvite
{

    protected $group;

    protected $sender;

    protected $confirmedEmails = [];

    /**
     * @param array $data
     * @param Group $group
     * @param User $sender
     */
    public function execute($data, Group $group, User $sender)
    {
        $this->group = $group;
        $this->sender = $sender;
        $this->validateUniqueEmails(explode(',', $data['emails']));
        $this->sendInvite($this->confirmedEmails, $data['message']);
    }

    /**
     * @param $emails
     */
    private function validateUniqueEmails($emails)
    {
        // Filtering Duplicates and Null values
        $filteredEmails = array_filter(array_unique($emails));

        foreach ($filteredEmails as $key => $email) {
            $email = trim($email);

            // Skip email if it belongs to sender
            if ($email == $this->sender) continue;

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (!$this->confirmPreviousInviteByEmail($email)) {
                    if (is_null($this->groupUserExists($email))) {
                        $this->confirmedEmails[] = $email;
                    }
                }
            }
        }
    }

    /**
     * @param $email
     * @return bool
     */
    private function confirmPreviousInviteByEmail($email)
    {
        $previousInvite = GroupInvite::where('email', $email)->where('group_id', $this->group->id)->first();
        return ($previousInvite) ? $this->analyzeResponse($previousInvite, $email) : false;
    }

    /**
     * @param $previousInvite
     * @param $email
     * @return bool
     */
    private function analyzeResponse($previousInvite, $email)
    {
        if ($previousInvite->status == 'waiting') {
//            $this->previous['awaiting'][] = $email;
            return true;
        } elseif ($previousInvite->status == 'accepted') {
//            $this->previous['already'][] = $email;
            return true;
        }
    }

    /**
     * @param $email
     * @return Builder|Model|object|null
     */
    private function groupUserExists($email)
    {
        return User::where('email', $email)
            ->with('groups')
            ->where('id', $this->group->id)
            ->first();
    }

    /**
     * @param $email
     * @return GroupInvite|Model
     */
    private function createGroupInvite($email)
    {
        return GroupInvite::create([
            'email' => $email,
            'code' => Str::random(6),
            'group_id' => $this->group->id,
        ]);
    }

    /**
     * @param $confirmedEmails
     * @param $message
     */
    private function sendInvite($confirmedEmails, $message)
    {
        foreach ($confirmedEmails as $email) {
            $group_invite = $this->createGroupInvite($email);
            SendGroupInvite::dispatch(
                $email,
                $group_invite->code,
                $this->group,
                $message,
                $this->sender->name
            );
        }
    }
}
