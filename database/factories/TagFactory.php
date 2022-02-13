<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'nome' =>$faker -> words(2, true),
        'descrizione'=>$faker ->words(20, true),
    ];
});
