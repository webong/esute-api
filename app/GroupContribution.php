<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\GroupContribution
 *
 * @property int $id
 * @property int $user_id
 * @property int $group_id
 * @property float $amount
 * @property string $cycle
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Group $group
 * @property-read User $user
 * @method static Builder|GroupContribution newModelQuery()
 * @method static Builder|GroupContribution newQuery()
 * @method static Builder|GroupContribution query()
 * @method static Builder|GroupContribution whereAmount($value)
 * @method static Builder|GroupContribution whereCreatedAt($value)
 * @method static Builder|GroupContribution whereCycle($value)
 * @method static Builder|GroupContribution whereGroupId($value)
 * @method static Builder|GroupContribution whereId($value)
 * @method static Builder|GroupContribution whereStatus($value)
 * @method static Builder|GroupContribution whereUpdatedAt($value)
 * @method static Builder|GroupContribution whereUserId($value)
 * @mixin Eloquent
 */
class GroupContribution extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public function group()
    {
        return $this->belongsTo('\App\Group');
    }
}
