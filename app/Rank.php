<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
  public $guarded = [];

  public function rankable() {
    return $this->morphTo();
  }
}
