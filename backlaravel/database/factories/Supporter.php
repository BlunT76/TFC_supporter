<?php

use Faker\Generator as Faker;

$factory->define(App\Supporter::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail
    ];
});
