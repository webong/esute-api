<?php

namespace App\Http\Controllers;

use App\GroupUser;
use App\GroupInvite;
use App\Http\Requests\JoinGroup;
use App\Group;

/**
 * @group Join Group
 */
class JoinGroupController extends Controller
{
    /**
     * Join a Group
     *
     * @authenticated
     * @param JoinGroup $request
     * @param Group $group
     * @return void
     */
    public function __invoke(JoinGroup $request, Group $group)
    {
        if(!is_null($this->groupUserExists($group)))
                return response()->json('You\'re already a member of this group', 409);
        
        if($request->has('invite_code'))  
        {
            if(is_null($this->groupInviteExists($request)))
                return response()->json('Invite code is not valid', 422);
        } else {
            if($group->private)
                return response()->json('You cannot join a private group', 403);
        }

        $this->createGroupUser($group);
        return response()->json('You\'re now a member of {$group->name} group');
    }

    private function createGroupUser($group)
    {
        GroupUser::create([
            'user_id' => Auth::id(),
            'group_id' => $group->id,
            'status' => 'active',
        ]);
    }

    private function groupInviteExists($invite_code)
    {
        return GroupInvite::where('code', $invite_code)->first();

    }

    private function groupUserExists()
    {
        return Auth::user()
            ->whereHas('group', function($query) {
                $query->where('id', $this->group->id);
            })->first();
    }

}
