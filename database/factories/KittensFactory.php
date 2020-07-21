<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\kittens::class, function (Faker $faker) {
    return [
        'height' => mt_rand(1, 15),
        'weight' => mt_rand(1, 15),
        'width' => mt_rand(1, 15),
        'age' => mt_rand(1, 15),
        'fur' => ['long', 'short', 'middle'][ mt_rand(0, 2)],
        'color' => $faker->colorName,
        'breed_id' => mt_rand(1, 5),
    ];
});
