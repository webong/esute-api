<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupUser extends Pivot
{
    protected $table = 'group_user';

    protected $dates = ['created_at', 'updated_at'];
}
