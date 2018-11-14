<?php

use Faker\Generator as Faker;

$factory->define(App\Tfcplayer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'portrait' => 'https://picsum.photos/200/300/?'.rand(1,800),
        'number' => rand(1,30)
    ];
});


//https://picsum.photos/200?random