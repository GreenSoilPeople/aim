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

$factory->define(App\Dealer::class, function (Faker\Generator $faker) {
    // $faker->addProvider(new Faker\Provider\ro_RO\Dealer($faker));
    $code = $faker->unique()->regexify('10[1-2]\d{2}');

    return [
        'code' => $code,
        'name' => 'Dealer '.$code,
        'address' => $faker->address,
    ];
});
