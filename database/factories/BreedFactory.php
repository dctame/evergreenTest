<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\breed::class, function (Faker $faker) {
    return [
             'breed' => $faker->words($nb = 2, $asText = true),
    ];
});
