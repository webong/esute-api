<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupUser;
use App\Http\Requests\CreateGroup;
use App\Http\Requests\UpdateGroup;
use App\Http\Requests\DeleteGroup;
use App\Http\Resources\GroupResource;
use Illuminate\Support\Facades\Auth;

/**
 * @group Groups
 * 
 * APIs for interacting and managing saving groups
 */
class GroupController extends Controller
{
    /**
     * Display a listing of the group.
     *
     * @authenticated
     * @queryParam page The page number to return
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::searchable()->paginate();

        return GroupResource::collection($groups);
    }

    /**
     * Store a newly created group in database.
     *
     * @authenticated
     * @param CreateGroup $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroup $request)
    {
        $group = Group::create($request->validated());

        if (!$group)
            return response()->json(['message' => 'Error Creating Group'], 500);

        $groupUser = GroupUser::create([
            'user_id' => Auth::id(),
            'group_id' => $group->id,
        ]);
        $groupUser->assignRole('admin');

        return GroupResource::make($group)
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the group resource.
     *
     * @authenticated
     * @param Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        if ($group->private)
            return response()->json(['message' => 'Group cannot be accessed'], 403);

        return GroupResource::make($group);
    }

    /**
     * Update the specified group in storage.
     *
     * @authenticated
     * @param UpdateRequest $request
     * @param Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroup $request, Group $group)
    {
        $group->update($request->validated());

        return new GroupResource($group);
    }

    /**
     * Delete the specified group in storage.
     *
     * @authenticated
     * @param DeleteRequest $request
     * @param Group  $group
     * @return \Illuminate\Http\Response
     */
    public function delete(DeleteGroup $request, Group $group)
    {
        $group->delete();

        return response()->json(null, 204);
    }
}
