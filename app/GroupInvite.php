<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

/**
 * App\GroupInvite
 *
 * @property int $id
 * @property string $code
 * @property string|null $email
 * @property int|null $group_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Group|null $group
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupInvite whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GroupInvite extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function invited($email)
    {
        return $this->belongsTo(User::class, 'email', 'email')
            ->where('email', $email);
    }
}
