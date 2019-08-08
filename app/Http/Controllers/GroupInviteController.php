<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use App\GroupInvite;
use App\Jobs\SendGroupInvite;
use App\Http\Requests\GroupInviteRequest;

class GroupInviteController extends Controller
{
    protected $group;

    protected $sender;

    protected $confirmedEmails = [];

    public function __invoke(GroupInviteRequest $request, Group $group)
    {
        $this->group = $group;
        $this->sender = Auth::user();
        $this->validateUniqueEmails(...$request->emails);
        $this->sendInvite($this->confirmedEmails, $request->message);
        return response()->json('Your Group Invitation is being processed');
    }

    protected function validateUniqueEmails($emails)
    {
        // Filtering Duplicates and Null values
        (array) $emails = array_filter(array_unique($emails));

        foreach ($emails as $key => $email) {
            $email = trim($email);
            // Skip email if it belongs to sender
            if ($email == $this->sender) continue;

            if (filter_var($emails, FILTER_VALIDATE_EMAIL)) {
                if (!$this->confirmPreviousInviteByEmail($email)) {
                    if (is_null($this->groupUserExists($email))) {
                        $this->confirmedEmails[] = $email;
                    } else {
                        $this->previous['already'][] = $email;
                    }
                }
            } 
        }
    }

    public function confirmPreviousInviteByEmail($email)
    {
        $previousInvite = GroupInvite::where('email', $email)->where('group_id', $this->group->id)->first();
        return ($previousInvite) ? $this->analyzeResponse($previousInvite, $email) : false;
    }

    public function analyzeResponse($previousInvite, $email)
    {
        if ($previousInvite->status == 'waiting') {
            $this->previous['awaiting'][] = $email;
            return true;
        } elseif ($previousInvite->status == 'accepted') {
            $this->previous['already'][] = $email;
            return true;
        }
    }

    public function groupUserExists($email)
    {
        return User::where('email', $email)
            ->whereHas('group', function($query) {
                $query->where('id', $this->group->id);
            })->first();
    }

    public function createGroupInvite($email)
    {
        return GroupInvite::create([
            'email' => $email,
            'code' => str_random(6),
            'group_id' => $this->group->id,
        ]);
    }

    public function sendInvite($confirmedEmails, $message)
    {
        foreach ($confirmedEmails as $email) {       
            $groupinvite = $this->createGroupInvite($email);     
            SendGroupInvite::dispatch(
                $email, 
                $groupinvite->code,
                $this->group, $message, 
                $this->user->name
            );
        }
    }

}
