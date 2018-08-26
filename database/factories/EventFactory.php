<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        //'category_id' => function() {
        //  return factory(App\Category::class)->create()->id;
        //},
        'user_id' => function() {
          return factory(App\User::class)->create()->id;
        },
        'description' => $faker->paragraph,
        'location' => $faker->word,
        'colour' => $faker->hexcolor,
        'status_id' => 1,
        'event_begin' => \Carbon\Carbon::now(),
        'event_end' => \Carbon\Carbon::now()
    ];
});
