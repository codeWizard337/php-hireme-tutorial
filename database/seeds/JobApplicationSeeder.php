<?php

use App\User;
use App\Job;
use App\JobApplication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class JobApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('role', 2)->pluck('id');
        $jobs = Job::withTrashed()->pluck('id');

        $dataset = Arr::random(Arr::crossJoin($users, $jobs), 100);

        foreach ($dataset as $data) {
            factory(JobApplication::class)->create([
                'user_id' => $data[0],
                'job_id' => $data[1],
            ]);
        }
    }
}
