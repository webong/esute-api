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
        $groupMembers = $group->members()
            ->with(['contributions' => function ($query) use ($group) {
                $query->where('group_id', $group->id)
                    ->sum('amount');
            }])
            ->get();
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
        $groupMember = $group->members()
            ->where('user_id', $user->id)
            ->with(['contributions' => function ($query) use ($group) {
                $query->where('group_id', $group->id)
                    ->sum('amount');
            }])
            ->first();

        return response()->json($groupMember);
    }
}
