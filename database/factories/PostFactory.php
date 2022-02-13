<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;

use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titolo'=>$faker ->sentence(),
        'sottotitolo'=>$faker ->sentence(),
        'autore'=>$faker ->words(2, true),
        'testo' =>$faker ->text(),
        'data'=>$faker ->date(),
    ];
});
