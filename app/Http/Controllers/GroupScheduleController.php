<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use App\Actions\StartGroupCycle;
/**
 * @group Group Scheduling
 */
class GroupScheduleController extends Controller
{
    /**
     * Start a Group Saving
     *
     * @authenticated
     * @param Group $group
     * @param StartGroupCycle $startGroupCycle
     * @return void
     */
    public function index(Group $group, StartGroupCycle $startGroupCycle)
    {
        if($this->checkAuthisGroupAdmin($group))
            return response()->json([
                'status' => false,
                'error' => 'You are not authorized to start this group savings.'], 
                403);

        $startGroupCycle->onQueue()->execute($group);

        return response()->json(['message' => 'Group contribution activated']);
    }

    /**
     * Update Group Start Date if not already started
     *
     * @authenticated
     * @bodyParam update_date date The date savings would commence for the group
     * @param Request $request
     * @param Group $group
     * @return void
     */
    public function update(Request $request, Group $group)
    {
        $this->validate($request, [
            'update_date' => 'required|date|after:yesterday',
        ]);

        if($this->checkAuthisGroupAdmin($group))
            return response()->json([
                'message' => 'You are not authorized to edit this group.'
            ], 403);

        if ($group->status = 'active')
            return response()->json([ 'message' => 'You cannot update start date of an active group'], 400);

        $group->update(['start_date' => $request->update_date]);

        return response()->json('Group start date updated');
    }
}
