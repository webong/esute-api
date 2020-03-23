<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;


/**
 * App\Group
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $amount
 * @property Carbon $start_date
 * @property int $completed_cycle
 * @property int|null $max_capacity
 * @property bool $private
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|GroupContribution[] $contributions
 * @property-read int|null $contributions_count
 * @property-read Collection|User[] $members
 * @property-read int|null $members_count
 * @property-read Collection|Role[] $roles
 * @property-read int|null $roles_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static Builder|Group onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|Group searchable()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCompletedCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereMaxCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group wherePrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 * @method static Builder|Group withTrashed()
 * @method static Builder|Group withoutTrashed()
 * @mixin Eloquent
 */
class Group extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = ['start_date'];

    protected $casts = [
        'private' => 'boolean'
    ];

    public function members()
    {
        return $this->belongsToMany('\App\User')
            ->using('\App\GroupUser')
            ->withPivot(['user_id', 'cycle', 'status'])
            ->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany('\App\Role')
            ->using('\App\GroupUser')
            ->withPivot(['user_id', 'cycle','status'])
            ->withTimestamps();
    }

    /**
     * @return HasMany
     */
    public function contributions()
    {
        return $this->hasMany('\App\GroupContribution');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeSearchable($query)
    {
        return $query->where('private', false);
    }
}
