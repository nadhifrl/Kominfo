<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tiket;
use Faker\Generator as Faker;

$factory->define(Tiket::class, function (Faker $faker) {
    return [
        'gambar'=>$faker->unique()->name
    ];
});
