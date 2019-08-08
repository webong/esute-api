<?php

namespace App\Http\Controllers;

use App\Group;
use App\Actions\ProcessGroupInvite;
use App\Http\Requests\GroupInviteRequest;

class GroupInviteController extends Controller
{
    protected $group;

    protected $sender;

    protected $confirmedEmails = [];

    public function __invoke(GroupInviteRequest $request, ProcessGroupInvite $processInvite, Group $group)
    {
        $processInvite->execute($request, $group, Auth::user());

        return response()->json('Your Group Invitation is being processed');
    }
}
