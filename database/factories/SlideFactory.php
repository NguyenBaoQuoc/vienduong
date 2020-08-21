<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'name' =>  $faker->word,
        'link' => "http://".Str::random(10),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'excerpt' => $faker->paragraphs(2,true),
        'user_create' => $faker->biasedNumberBetween($min = 1, $max = 10)
        
    ];
});
