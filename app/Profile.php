<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $guarded = [];

    /**
     * A user has only one profile
     *
     */

    public function user() {
        return $this->belongsTo(User::class);
    }
}
