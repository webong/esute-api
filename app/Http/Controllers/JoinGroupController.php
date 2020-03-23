<?php

namespace App\Http\Controllers;

use App\GroupUser;
use App\GroupInvite;
use App\Http\Requests\JoinGroup;
use App\Group;
use Illuminate\Http\JsonResponse;
use Auth;

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
     * @return JsonResponse
     */
    public function __invoke(JoinGroup $request, Group $group)
    {
        if (!is_null($this->groupUserExists($group)))
            return response()->json(['message' => 'You\'re already a member of this group'], 409);

        if ($request->exists('invite_code') && !is_null($this->groupInviteExists($request->get('invite_code'))))
            return response()->json(['message' => 'Invite code is not valid'], 422);

        if ($group->private)
            return response()->json(['message' => 'You cannot join a private group'], 403);

        $this->createGroupUser($group);

        return response()->json(['message' => "You're now a member of {$group->name} group"]);
    }

    /**
     * @param Group $group
     */
    private function groupUserExists($group)
    {
        GroupUser::where('user_id', Auth::id())
            ->where('group_id', $group->id)
            ->first();
    }

    /**
     * @param string $invite_code
     */
    private function groupInviteExists($invite_code)
    {
        GroupInvite::where('email', Auth::user()->email)
            ->where('code', $invite_code)
            ->first();
    }

    /**
     * @param Group $group
     */
    private function createGroupUser($group)
    {
        GroupUser::create([
            'user_id' => Auth::id(),
            'group_id' => $group->id,
        ]);
    }
}
