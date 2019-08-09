<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
            ->withPivot(['user_id', 'cycle', 'role_id', 'status'])
            ->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany('\App\Role')
            ->using('\App\GroupUser')
            ->withPivot(['user_id', 'cycle', 'role_id','status'])
            ->withTimestamps();
    }

    public function contributions()
    {
        return $this->hasMany('\App\Contribution');
    }

    public function scopeSearchable($query)
    {
        return $query->where('private', false);
    }
}
