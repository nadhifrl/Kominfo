<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sarana;
use Faker\Generator as Faker;

$factory->define(App\Sarana::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'judul'=>Str::slug($faker->unique()->name,'-'),
        'body'=>$word,
        'gambar'=>$faker->unique()->name
    ];
});
