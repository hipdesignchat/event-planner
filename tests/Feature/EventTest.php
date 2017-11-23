<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Event;
use App\User;

class EventTest extends TestCase
{
    /**
     * Tests to see if the event view is returned
     * @return void
     */
    public function test_event_view()
    {
        $response = $this->get('/event');
        $response->assertStatus(200);
    }

    /**
     * Tests if an event can be created
     *
     * @return void
     */
    public function test_can_make_an_event()
    {
        // Given there are two events
        $event_first = factory(Event::class)->create();
        $event_second = factory(Event::class)->create([
            'event_begin' => \Carbon\Carbon::now()->addMonth(),
            'event_end' => \Carbon\Carbon::now()->addMonth()->addDay()
        ]);

        // as a user
        $user = factory(User::class)->create();
        $this->be($user);

        $data = [
            'title'       => 'New Event',
            'description' => 'This event is rad!',
            'category_id' => 1,
            'location'    => 'Darling Harbour',
            'status_id'   => 1,
            'colour'      => '#000',
            'event_begin' => '2018-10-31 10:00:00',
            'event_end'   => '2018-11-01 10:00:00'
        ];

        // When I submit a new event
        $result = $this->post("event", $data);

        // Then the response should be in the proper format
        $this->assertDatabaseHas('events', $data);
    }
}
