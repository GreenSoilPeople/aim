<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Sdd::class, function (Faker\Generator $faker) {
    return [
        'sn' => $faker->unique()->isbn10,
        'in' => $faker->dateTimeBetween($startDate = '-3 days', $endDate = 'now', $timezone = 'Europe/Bucharest')->format('Y-m-d')
    ];
});
