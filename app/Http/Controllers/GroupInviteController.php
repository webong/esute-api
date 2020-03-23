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
     * @param GroupInvite $request
     * @param ProcessGroupInvite $processInvite
     * @param Group $group
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(GroupInvite $request, ProcessGroupInvite $processInvite, Group $group)
    {
        $user = Auth::user();

        $processInvite->execute($request, $group, $user);

        return response()->json(['message' => 'Group invite is being processed.']);
    }
}
