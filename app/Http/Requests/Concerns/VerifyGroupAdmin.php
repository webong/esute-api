<?php

namespace App\Http\Requests\Concerns;

use App\GroupUser;
use Illuminate\Support\Facades\Auth;

trait VerifyGroupAdmin
{
    protected function authUserIsAdmin()
    {
        $group = $this->group;
        return (new GroupUser)->newQuery()->where('user_id', Auth::id())
            ->where('group_id', $group->id)
            ->first()
            ->isGroupAdmin();
    }
}
