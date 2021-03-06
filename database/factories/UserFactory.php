<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'weight' => rand(600, 1600) / 10,
        'height' => rand(1500, 2000) / 10,
        'gender' => $faker->randomElement(['f', 'm']),
        'dob' => $faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
        'activity_level' => $faker->randomElement([1.2, 1.375, 1.55, 1.725, 1.9]),
        'goal_weight' => rand(600, 1600) / 10,
        'weekly_goal' => $faker->randomElement([2, 1.5, 1, 0.5]),
        'measurement_system' => $faker->randomElement(['kg', 'lb']),
        'remember_token' => Str::random(10),
    ];
});
