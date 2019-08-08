<?php

namespace App\Http\Controllers;

use App\Group;
use App\Actions\ProcessGroupInvite;
use App\Http\Requests\GroupInviteRequest;

class GroupInviteController extends Controller
{

    public function __invoke(GroupInviteRequest $request, ProcessGroupInvite $processInvite, Group $group)
    {
        $processInvite->onQueue()->execute($request, $group, Auth::user());

        return response()->json('Group Invites is being processed');
    }
}
