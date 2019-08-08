<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use App\Actions\GroupScheduleCycle;
use App\Actions\StartGroupCycle;

class GroupScheduleController extends Controller
{
    public function index(Group $group, StartGroupCycle $startGroup)
    {
        $startGroup->onQueue()->execute($group);

        return response()->json('Group contribution activated');
    }

    public function update(Request $request, Group $group)
    {
        $this->validate($request, [
            'update_date' => 'required|date|after:yesterday',
        ]);

        if($group->status = 'active')
            return response()->json('You cannot update start date of an active group');
        
        $group->update(['start_date' => $request->update_date]);

        return response()->json('Group start date updated');
    }
}
