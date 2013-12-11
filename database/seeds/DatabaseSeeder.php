<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(UserDetailSeeder::class);

        $this->call(CompanySeeder::class);

        $this->call(CompanyUserSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(StatusSeeder::class);

        $this->call(JobApplicationSeeder::class);
    }
}
