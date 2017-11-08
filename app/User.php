<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // MN: Set the password to automatically encrypt using bcrypt
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }


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
     * Associate a User with many Events
     */
    public function events() {
        return $this->hasMany(Event::class);
    }

    /**
     *  Publish an Event
     */
    public function publish(Event $event) {
        $this->events()->save($event);
        // $event = Event::create([
        //     'title'         => request('title'),
        //     'description'   => request('description'),
        //     'location'      => request('location'),
        //     'user_id'       => auth()->id,
        //     'status_id'     => request('status_id'),
        //     'event_begin'   => request('event_begin'),
        //     'event_end'     => request('event_end')
        // ]);
    }
}
