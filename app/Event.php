<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopeCurrent($query) {
      return $query->where('status_id', 1);
    }
}
