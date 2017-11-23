<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{
    public function test_get_home_page() {
        $response = $this->get('/');
        $response->assertSeeText('Event Planner');
    }

    public function test_get_about_page() {
        $response = $this->get('/about');
        $response->assertSeeText('About Us');
    }

    public function test_get_terms_page() {
        $response = $this->get('/terms');
        $response->assertSeeText('Terms of Service');
    }

    public function test_get_privacy_page() {
        $response = $this->get('/privacy');
        $response->assertSeeText('Privacy Policy');
    }
}
