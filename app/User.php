<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsToMany('\App\Role')
            ->using('App\GroupUser')
            ->withPivot(['group_id', 'cycle', 'role_id', 'status'])
            ->withTimestamps();
    }

	public function groups()
	{
        return $this->belongsToMany('\App\Group')
            ->using('App\GroupUser')
            ->withPivot(['role_id', 'cycle', 'group_id', 'status'])
            ->withTimestamps();
    }
    
    public function contributions()
    {
        return $this->hasMany('\App\Contribution');
    }

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}
