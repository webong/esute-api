<?php

namespace App\Actions;

use App\User;
use App\Group;
use App\GroupInvite;
use App\Jobs\SendGroupInvite;

class ProcessGroupInvite
{

    protected $group;

    protected $sender;

    protected $confirmedEmails = [];

    public function execute($data, Group $group, User $sender)
    {
        $this->group = $group;
        $this->sender = $sender;

        $this->validateUniqueEmails(explode(',', $data->emails));
        $this->sendInvite($this->confirmedEmails, $data->message);
    }

    private function validateUniqueEmails($emails)
    {
        // Filtering Duplicates and Null values
        (array) $filteredEmails = array_filter(array_unique($emails));

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

    private function confirmPreviousInviteByEmail($email)
    {
        $previousInvite = GroupInvite::where('email', $email)->where('group_id', $this->group->id)->first();
        return ($previousInvite) ? $this->analyzeResponse($previousInvite, $email) : false;
    }

    private function analyzeResponse($previousInvite, $email)
    {
        if ($previousInvite->status == 'waiting') {
            $this->previous['awaiting'][] = $email;
            return true;
        } elseif ($previousInvite->status == 'accepted') {
            $this->previous['already'][] = $email;
            return true;
        }
    }

    private function groupUserExists($email)
    {
        return User::where('email', $email)
            ->with('groups')
            ->where('id', $this->group->id)
            ->first();
    }

    private function createGroupInvite($email)
    {
        return GroupInvite::create([
            'email' => $email,
            'code' => str_random(6),
            'group_id' => $this->group->id,
        ]);
    }

    private function sendInvite($confirmedEmails, $message)
    {
        foreach ($confirmedEmails as $email) {
            $groupinvite = $this->createGroupInvite($email);
            SendGroupInvite::dispatch(
                $email,
                $groupinvite->code,
                $this->group,
                $message,
                $this->sender->name
            );
        }
    }
}
