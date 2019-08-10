<?php

namespace App\Http\Controllers;

use App\Group;
use App\Actions\StartGroupCycle;
use App\Http\Requests\GroupSchedule;

/**
 * @group Group Scheduling
 */
class GroupScheduleController extends Controller
{
    /**
     * Start a Group Saving
     *
     * @authenticated
     * @param GroupSchedule $request
     * @param Group $group
     * @param StartGroupCycle $startGroupCycle
     * @return void
     */
    public function index(GroupSchedule $request, Group $group, StartGroupCycle $startGroupCycle)
    {
        $startGroupCycle->onQueue()->execute($group);

        return response()->json(['message' => 'Group contribution activated']);
    }

    /**
     * Update Group Start Date if not already started
     *
     * @authenticated
     * @bodyParam update_date date The date savings would commence for the group
     * @param GroupSchedule $request
     * @param Group $group
     * @return void
     */
    public function update(GroupSchedule $request, Group $group)
    {
        $this->validate($request, [
            'update_date' => 'required|date|after:yesterday',
        ]);

        if ($group->status = 'active')
            return response()->json([ 'message' => 'You cannot update start date of an active group'], 400);

        $group->update(['start_date' => $request->update_date]);

        return response()->json('Group start date updated');
    }
}
