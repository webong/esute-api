<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\GroupContributionOrder
 *
 * @property int $id
 * @property int $order
 * @property int $group_id
 * @property int $user_id
 * @property int $current_cycle
 * @property string $schedule_date
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereCurrentCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereScheduleDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContributionOrder whereUserId($value)
 * @mixin \Eloquent
 */
class GroupContributionOrder extends Model
{
    //
}
