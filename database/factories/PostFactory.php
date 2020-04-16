<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->name,
        'body' => $faker->text
    ];
});
