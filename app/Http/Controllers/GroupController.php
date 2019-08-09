<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupUser;
use App\Http\Requests\CreateGroup;
use App\Http\Requests\UpdateGroup;
use App\Http\Resources\GroupResource;

class GroupController extends Controller
{
    /**
     * Display a listing of the group.
     *
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
     * @param \App\Http\Requests\CreateGroup $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroup $request)
    {
        $data = $request->validated();

        $group = Group::create($data);

        if (!$group) {
            $response = [
                'status' => false,
                'error' => 'Error Creating Group'
            ];
            return response()->json($response, 500);
        }

        $groupUser = GroupUser::create([
            'user_id' => Auth::id(),
            'group_id' => $group->id,
        ]);
        $groupUser->assignRole('admin');

        return new GroupResource($group);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        if ($group->private)
            $response = [
                'status' => false,
                'error' => 'Group cannot be accessed'
            ];
            return response()->json($response, 403);

        return new GroupResource($group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateRequest $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroup $request, Group $group)
    {
        $group->update($request->validated());

        return new GroupResource($group);
    }
}
