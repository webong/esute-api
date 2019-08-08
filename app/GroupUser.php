<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Permission\Traits\HasRoles;

class GroupUser extends Pivot
{
    use HasRoles;

    protected $guard_name = 'api';

    protected $table = 'group_user';

    protected $dates = ['created_at', 'updated_at'];
}
