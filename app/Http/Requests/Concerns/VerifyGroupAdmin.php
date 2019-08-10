<?php

namespace App\Http\Requests\Concerns;

use App\GroupUser;
use Illuminate\Support\Facades\Auth;

trait VerifyGroupAdmin
{
    protected function authUserIsAdmin()
    {
        $group = $this->route->parameter('group');
        return GroupUser::newQuery()->where('user_id', Auth::id())
            ->where('group_id', $group->id)
            ->isGroupAdmin();
    }
}
