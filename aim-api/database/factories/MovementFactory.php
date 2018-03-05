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

$factory->define(App\Movement::class, function (Faker\Generator $faker) {
    return [
        'dealer_id' => function () {
            return factory(App\Dealer::class)->create()->code;
        },
        'sdd_id' => function () {
            return factory(App\Sdd::class)->create()->sn;
        }
    ];
});
