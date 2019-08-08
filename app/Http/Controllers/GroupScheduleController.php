<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupScheduleController extends Controller
{
    public function __invoke(Request $request, Group $group)
    {
        $this->validate($request, [
            'update_date' => 'required|date|after:yesterday',
        ]);
        
    }
}
