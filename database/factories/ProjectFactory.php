<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' =>  $faker->word,
        'customer' =>  $faker->name,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'year_create' => mt_rand(1990, 2020),
        'mass' => $faker->biasedNumberBetween($min = 100, $max = 500)." tấn",
        'categories' => $faker->paragraphs(1,true),
        
        'user_create' => $faker->biasedNumberBetween($min = 1, $max = 10),
        'post_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        
    ];
});
