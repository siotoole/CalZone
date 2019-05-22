<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CalorieCheckIn;
use Faker\Generator as Faker;

$factory->define(CalorieCheckIn::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'calories' => rand(1000, 2000)
    ];
});
