<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\GroupInvite;
use App\Actions\ProcessGroupInvite;
use Illuminate\Support\Facades\Auth;

/**
 * @group Group Invitation
 */
class GroupInviteController extends Controller
{

    /**
     * Invite a list of emails to the group.
     *
     * @authenticated
     * @response {
     *  "message": ["Group invite is being processed"]
     * }
     */
    public function __invoke(GroupInvite $request, ProcessGroupInvite $processInvite, Group $group)
    {
        $processInvite->execute($request, $group, Auth::user());

        return response()->json(['message' => 'Group invite is being processed.']);
    }
}
