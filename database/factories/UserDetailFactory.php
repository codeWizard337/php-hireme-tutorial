<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserDetail;
use Faker\Generator as Faker;

$factory->define(UserDetail::class, function (Faker $faker) {
    return [
        'type' => $faker->numberBetween(1, 5),
        'title' => ucwords($faker->sentence(5)),
        'description' => $faker->paragraph(5),
    ];
});
