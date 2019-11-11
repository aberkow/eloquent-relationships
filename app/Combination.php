<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    public $guarded = [];

    /**
     * 
     * Each combination will have an owner
     * Each combination will belong/have access to many techniques
     * 
     */

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function techniques() {
        return $this->belongsToMany(Technique::class)->withTimestamps();
    }
}
