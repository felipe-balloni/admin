<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
        $title = $faker->paragraph(1);
    return [
        'uri' => Str::slug($title),
        'title' => $title,
        'subtitle'=> $faker->paragraph(2),
        'content' => $faker->paragraph(20),
        'author' => 1
    ];
});
