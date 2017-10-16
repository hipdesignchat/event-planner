<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Event;

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

        $data = [
            'title'       => 'New Event',
            'description' => 'This event is rad!',
            'location'    => 'Darling Harbour',
            'owner_id'    => 1,
            'status_id'   => 1,
            'event_begin' => 'NOW()',
            'event_end'   => 'NOW()'
        ];

        // MN: Test to submit data
        $result = $this->post("event", $data);
        // MN: This checks that we've been redirected
        $result->assertStatus(302);
        //$result->assertJsonStructure(array_keys($data), $data);
        // MN: Test if the data is received by checking the view
    }
}
