<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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


    /**
     * 
     * A user has a single profile
     * 
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    /**
     * 
     * A user should have many combinations
     * Each combination should have many techniques
     * Each technique should be able to be used in many combinations
     * 
     */

    public function combinations() {
        return $this->hasMany(Combination::class, 'owner_id');
    }


    public function techniques() {
        return $this->hasMany(Technique::class, 'owner_id');
    }

    public function rank() {
        return $this->morphMany('App\Rank', 'rankable');
    }
}
