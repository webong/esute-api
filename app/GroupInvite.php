<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class GroupInvite extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo('\App\Group');
    }

    public function invited()
    {
        return $this->belongsTo('\App\User', 'email', 'email')
            ->where('email', Auth::user()->email);
    }
}
