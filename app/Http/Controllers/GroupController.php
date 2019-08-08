<?php

namespace App\Http\Controllers;

use App\Role;
use App\Group;
use App\GroupUser;
use App\Http\Requests\CreateGroup;
use App\Http\Requests\UpdateGroup;

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
        return response()->json($groups);
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
            return response()->json(500, 'Error Creating Group');
        }

        $role = Role::where('name', 'admin')->first();
        GroupUser::create([
            'user_id' => Auth::id(),
            'group_id' => $group->id,
            'role_id' => $role->id,
            'status' => 'active',
        ]);

        return response()->json($group);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        // abort_unless($episode->isVisibleTo(Auth::user()), 404);
        return response()->json($group);
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

        return request($group);
    }
}
