<?php

use App\Company;
use App\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Job::class)->create([
            'position' => 'Software Engineer',
            'description' => 'Create, maintain, audit and improve systems to meet particular needs, often as advised by a systems analyst or architect, testing both hard and software systems to diagnose and resolve system faults.',
            'is_fulltime' => true,
            'company_id' => 1,
        ]);

        factory(Job::class)->create([
            'position' => 'Database Manager',
            'description' => 'Maintains database results by setting and enforcing standards and controls. Prepares for database expansion by studying plans and requirements; advising senior technical management; coordinating design and programming.',
            'is_fulltime' => false,
            'company_id' => 2,
        ]);

        factory(Job::class)->states('deleted')->create([
            'position' => 'DevOps',
            'description' => 'DevOps is a series of practices and processes that are intended to speed up and automate aspects of the processes of developing, testing and releasing software, allowing for the continuous delivery of software and software updates.',
            'is_fulltime' => true,
            'company_id' => 4,
        ]);


        $companies = Company::all();

        foreach($companies as $company) {
            $job_count = 10 - intval( sqrt(rand(0, 10*10)) );

            $company->jobs()->createMany(
                factory(Job::class, $job_count)->states('random')->make()->toArray(),
            );
        }
    }
}
