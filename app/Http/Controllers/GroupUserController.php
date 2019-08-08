<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
class GroupUserController extends Controller
{
    /**
     * Display a listing of the group members.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function index(Group $group)
    {
        $groupMembers = $group->members;
        return response()->json($groupMembers);
    }

    /**
     * Display the specified group member.
     *
     * @param  \App\Group  $group
     * @param  \App\Group  $groupUser
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group, User $user)
    {
        $groupMember = $group->members()->where('user_id', $user->id)->first();
        $groupContributions = $groupMember->contributions()->where('group_id', $group->id)->get();

        return response()->json([
            $groupMember,
            'contributions' => $groupContributions,
        ]);
    }
}
