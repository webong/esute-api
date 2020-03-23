<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

/**
 * App\GroupUser
 *
 * @property int $id
 * @property int $group_id
 * @property int $user_id
 * @property string $cycle
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupUser whereUserId($value)
 * @mixin \Eloquent
 */
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
