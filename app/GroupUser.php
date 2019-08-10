<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Pivot
{
    use HasRoles;

    public $incrementing = true;

    protected $guard_name = 'api';

    protected $table = 'group_user';

    protected $dates = ['created_at', 'updated_at'];

    public function isGroupAdmin()
    {
        return $this->hasRole('admin');
    }
}
