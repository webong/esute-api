<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use Throwable;
use App\{Group, GroupUser};
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CreateGroup;
use App\Http\Requests\DeleteGroup;
use App\Http\Requests\UpdateGroup;
use App\Http\Resources\GroupResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Groups
 *
 * APIs for interacting and managing saving groups
 */
class GroupController extends Controller
{
    /**
     * Display a listing of the group.
     *
     * @authenticated
     * @queryParam page The page number to return
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $groups = Group::searchable()->paginate();

        return GroupResource::collection($groups);
    }

    /**
     * Store a newly created group in database.
     *
     * @authenticated
     * @param CreateGroup $request
     * @return JsonResponse|object
     * @throws Throwable
     */
    public function store(CreateGroup $request)
    {
        try {
            DB::beginTransaction();

            $group = Group::create($request->validated());

            if (!$group)
                return response()->json(['message' => 'Error Creating Group'], 500);

            $groupUser = GroupUser::create([
                'user_id' => Auth::id(),
                'group_id' => $group->id,
            ]);
            $groupUser->assignRole('admin');

            DB::commit();

            return GroupResource::make($group)
                ->response()
                ->setStatusCode(201);
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the group resource.
     *
     * @authenticated
     * @param Group $group
     * @return GroupResource|JsonResponse
     */
    public function show(Group $group)
    {
        if ($group->private)
            return response()->json(['message' => 'Group cannot be accessed'], 403);

        return GroupResource::make($group);
    }

    /**
     * Update the specified group in storage.
     *
     * @authenticated
     * @param UpdateGroup $request
     * @param Group $group
     * @return GroupResource|Response
     */
    public function update(UpdateGroup $request, Group $group)
    {
        $group->update($request->validated());

        return new GroupResource($group);
    }

    /**
     * Delete the specified group in storage.
     *
     * @authenticated
     * @param DeleteGroup $request
     * @param Group $group
     * @return JsonResponse
     * @throws Exception
     */
    public function delete(DeleteGroup $request, Group $group)
    {
        $group->delete();

        return response()->json(null, 204);
    }
}
