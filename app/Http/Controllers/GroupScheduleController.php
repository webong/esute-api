<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use App\Actions\GroupScheduleCycle;
use App\Actions\StartGroupCycle;

/**
 * @group Group Scheduling
 */
class GroupScheduleController extends Controller
{
    /**
     * Start a Group Saving
     *
     * @param Group $group
     * @param StartGroupCycle $startGroupCycle
     * @return void
     */
    public function index(Group $group, StartGroupCycle $startGroupCycle)
    {
        $startGroupCycle->onQueue()->execute($group);

        return response()->json('Group contribution activated');
    }

    /**
     * Update Group Start Date if not already started
     *
     * @param Request $request
     * @param Group $group
     * @return void
     */
    public function update(Request $request, Group $group)
    {
        $this->validate($request, [
            'update_date' => 'required|date|after:yesterday',
        ]);

        if($group->status = 'active')
            return response()->json('You cannot update start date of an active group', 400);
        
        $group->update(['start_date' => $request->update_date]);

        return response()->json('Group start date updated');
    }
}
