<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    public $guarded = [];

    /**
     * 
     * Each technique will have an owner
     * Each technique will belong to many combinations
     * 
     */


    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function combinations() {
        return $this->belongsToMany(Combination::class)->withTimestamps();
    }

    public function rank() {
        return $this->morphMany('App\Rank', 'rankable');
    }
}
