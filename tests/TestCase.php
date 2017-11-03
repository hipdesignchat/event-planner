<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Faker\Factory as Faker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;
    protected $faker;

    public function setup()
    {
        parent::setup();
        $this->faker = Faker::create();
        $this->seed();
    }

    public function teardown()
    {
        $this->artisan('migrate:reset');
        parent::teardown();
    }
}
