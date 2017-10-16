<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $visible = ['title','description','location','status_id','event_begin','event_end'];

    protected $fillable = ['title','description','location','owner_id','status_id','event_begin','event_end'];

    /**
     * Constructor
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns items where the status code is published
     *
     * @return Query
     */
    public function scopeCurrent($query) {
        return $query->where('status_id', 1);
    }

    }
}
