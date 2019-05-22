<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\WeightCheckIn;
use Faker\Generator as Faker;

$factory->define(WeightCheckIn::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'weight' => rand(600, 1600) / 10    // Generate a random decimal between 60.0 and 160.0.
    ];
});
