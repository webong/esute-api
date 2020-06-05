<?php

namespace App\Http\Controllers;

use Auth;
use App\Group;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\GroupInvite;
use App\Actions\ProcessGroupInvite;

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
     * @return JsonResponse
     */
    public function __invoke(GroupInvite $request, ProcessGroupInvite $processInvite, Group $group)
    {
        $processInvite->execute($request->toArray(), $group, Auth::user());

        return response()->json(['message' => 'Group invite is being sent.']);
    }
}
