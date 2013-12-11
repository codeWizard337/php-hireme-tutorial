<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'position' => ucwords($faker->sentence(5)),
        'qualification' => $faker->paragraph(10),
        'description' => $faker->paragraph(5),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'salary' => 12 * $faker->numberBetween(15, 30) * 1000 * 1000,
        'contact' => $faker->phoneNumber,
        'is_fulltime' => $faker->boolean,
    ];
});


$factory->afterMakingState(Job::class, 'deleted', function ($job, $faker) {
    $job->deleted_at = date("Y-m-d H:i:s");
});


$factory->afterMakingState(Job::class, 'random', function ($job, $faker) {
    if ($faker->boolean(20)) {
        $job->deleted_at = date("Y-m-d H:i:s");
    }
});
