<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Group
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $amount
 * @property \Illuminate\Support\Carbon $start_date
 * @property int $completed_cycle
 * @property int|null $max_capacity
 * @property bool $private
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\GroupContribution[] $contributions
 * @property-read int|null $contributions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $members
 * @property-read int|null $members_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Group onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group searchable()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereCompletedCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereMaxCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group wherePrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Group whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Group withoutTrashed()
 */
	class Group extends \Eloquent {}
}

namespace App{
/**
 * App\GroupContribution
 *
 * @property int $id
 * @property int $user_id
 * @property int $group_id
 * @property float $amount
 * @property string $cycle
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Group $group
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GroupContribution whereUserId($value)
 */
	class GroupContribution extends \Eloquent {}
}

namespace App{
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
 */
	class GroupContributionOrder extends \Eloquent {}
}

namespace App{
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
 */
	class GroupInvite extends \Eloquent {}
}

namespace App{
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
 */
	class GroupUser extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Group[] $group
 * @property-read int|null $group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @property-read int|null $user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Spatie\Permission\Models\Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $api_token
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\GroupContribution[] $contributions
 * @property-read int|null $contributions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Group[] $groups
 * @property-read int|null $groups_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereApiToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

