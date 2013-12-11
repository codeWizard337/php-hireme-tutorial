<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('useruser'),

        'address' => $faker->address,
        'gender' => $faker->randomElement([ 'male', 'female' ]),
        'date_of_birth' => $faker->dateTimeThisCentury,

        'role' => 2,

        'remember_token' => Str::random(10),
    ];
});


$factory->state(User::class, 'admin', function (Faker $faker) {
    return [
        'password' => Hash::make('adminadmin'),
        'role' => 0,
    ];
});


$factory->state(User::class, 'recruiter', function (Faker $faker) {
    return [
        'password' => Hash::make('recruiter'),
        'role' => 1,
    ];
});
