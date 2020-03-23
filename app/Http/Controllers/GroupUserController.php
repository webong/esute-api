<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use App\Http\Resources\GroupUserResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Group Members
 */
class GroupUserController extends Controller
{
    /**
     * Display a listing of the group members.
     *
     * @authenticated
     * @queryParam page The page number to return
     * @param Group $group
     * @return AnonymousResourceCollection
     */
    public function index(Group $group)
    {
        $groupMembers = $group->members()
            ->with('contributions')
            ->paginate();

        return GroupUserResource::collection($groupMembers);
    }

    /**
     * Display the specified group member.
     *
     * @param Group $group
     * @param User $user
     * @return GroupUserResource
     */
    public function show(Group $group, User $user)
    {
        $groupMember = $group->members()
            ->where('user_id', $user->id)
            ->with('contributions')
            ->first();

        return GroupUserResource::make($groupMember);
    }
}
