<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobApplication;
use App\Status;
use Faker\Generator as Faker;

$factory->define(JobApplication::class, function (Faker $faker) {
    return [
        'status_id' => Status::inRandomOrder()->first('id')->id,
    ];
});


$factory->afterMaking(JobApplication::class, function ($application, $faker) {
    if ($application->status->id === Status::pending() && $application->job->trashed()) {
        $application->status_id = Status::is_deleted();
    }

    if ($application->status->id === Status::is_published()) {
        $application->publish($application->user_id);
        $application->deleted_at = date("Y-m-d H:i:s");

    } else if ($application->status->id === Status::is_deleted()) {
        $application->deleted_at = date("Y-m-d H:i:s");
    }
});
