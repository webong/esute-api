<?php

namespace App\Http\Controllers;

use App\GroupUser;
use App\GroupInvite;
use App\Http\Requests\JoinGroup;
use App\Group;
use Illuminate\Support\Facades\Auth;

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
        if (!is_null($this->groupUserExists($group)))
            return response()->json(['message' => 'You\'re already a member of this group'], 409);

        if ($request->has('invite_code')) {
            if (!is_null($this->groupInviteExists($request->invite_code)))
                return response()->json(['message' => 'Invite code is not valid'], 422);
        } else {
            if ($group->private)
                return response()->json(['message' => 'You cannot join a private group'], 403);
        }

        $this->createGroupUser($group);
        return response()->json(['message' => "You're now a member of {$group->name} group"]);
    }

    private function groupUserExists($group)
    {
        GroupUser::where('user_id', Auth::id())
            ->where('group_id', $group->id)
            ->first();
    }

    private function groupInviteExists($invite_code)
    {
        GroupInvite::where('email', Auth::user()->email)
            ->where('code', $invite_code)
            ->first();
    }

    private function createGroupUser($group)
    {
        GroupUser::create([
            'user_id' => Auth::id(),
            'group_id' => $group->id,
        ]);
    }
}
