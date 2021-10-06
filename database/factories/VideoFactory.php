<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'url' => $faker->imageUrl(800, 600),
        'post_id' => $faker->numberBetween(1, 50),
        'featured' => $faker->randomElement([true, false]),
    ];
});
