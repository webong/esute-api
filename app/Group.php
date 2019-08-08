<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];

    protected $dates = ['start_date'];

    protected $casts = [
        'searchable' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsToMany('\App\User')
            ->using('\App\GroupUser')
            ->withPivot(['user_id', 'cycle', 'role_id', 'status'])
            ->withTimestamps();
    }

    public function role()
    {
        return $this->belongsToMany('\App\Role')
            ->using('\App\GroupUser')
            ->withPivot(['user_id', 'cycle', 'role_id','status'])
            ->withTimestamps();
    }

    public function contribution()
    {
        return $this->hasMany('\App\Contribution');
    }

    public function scopeSearchable($query)
    {
        return $query->where('searchable', true);
    }
}
