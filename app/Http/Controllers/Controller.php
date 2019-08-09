<?php

namespace App\Http\Controllers;

use App\GroupUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function checkAuthisGroupAdmin($group)
    {
        return GroupUser::newQuery()->where('user_id', Auth::id())
            ->where('group_id', $group->id)
            ->isGroupAdmin();
    }
}
