<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;

use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'nome' =>$faker -> words(2, true),
        'descrizione'=>$faker -> paragraph(),

    ];
});
