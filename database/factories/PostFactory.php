<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $data = ['Hệ thống thép', 'Hệ thống khung'];
    return [
        'name' =>  $faker->word,
        'url' => $faker->url,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        
        'type' => "tin_tuc",
        'excerpt' => $faker->paragraphs(2,true),
        'content' => $faker->paragraphs(5,true),
        'user_create' => $faker->biasedNumberBetween($min = 1, $max = 10),
        'system' => json_encode($data)
    ];
});
