<?php

namespace App;

use Spatie\Permission\Models\Role as Model;

class Role extends Model
{
    public function user()
    {
        return $this->belongsToMany('\App\User')
            ->using('App\GroupUser')
            ->withPivot(['user_id', 'cycle', 'group_id', 'status'])
            ->withTimestamps();
    }

    public function group()
    {
        return $this->belongsToMany('\App\Group')
            ->using('\App\GroupUser')
            ->withPivot(['user_id', 'cycle', 'group_id', 'status'])
            ->withTimestamps();
    }
}
