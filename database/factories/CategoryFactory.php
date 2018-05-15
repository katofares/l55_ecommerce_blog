<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->words($nb = 2, $asText = true),
        'body' => $faker->sentence(10),
    ];
});
