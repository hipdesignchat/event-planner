<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $visible = ['title','description','location','status_id','event_begin','event_end'];

    protected $fillable = ['title','description','location','owner_id','status_id','event_begin','event_end'];

    /**
     * Attributes that should be mutated to dates. 
     * 
     * @var array
     */
    protected $dates = [
        'event_begin',
        'event_end'
    ];

    protected $dateFormat = 'Y-m-d\TH:i:s';
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

    /**
     * Inserts an event into the database
     *
     * @return $event
     */
    public static function create($request) {
        $event = new Event;
        $event->title = $request['title'];
        $event->description = $request['description'];
        $event->location = $request['location'];
        $event->owner_id = $request['owner_id'];
        $event->status_id = $request['status_id'];
        $event->event_begin = $request['event_begin'];
        $event->event_end = $request['event_end'];

        $event->save();

        return $event;
    }
}
