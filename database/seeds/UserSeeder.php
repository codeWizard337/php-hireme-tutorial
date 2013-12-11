<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'admin@findhireme.com',
            'password' => Hash::make('adminadmin'),
            'address' => 'Admin address 10',
            'gender' => 'male',
            'dob' => 'January 1',
            'role' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'RECRUITER A',
            'email' => 'recruiter_a@findhireme.com',
            'password' => Hash::make('recruiter'),
            'address' => 'Recruiter address 20',
            'gender' => 'male',
            'dob' => 'March 1',
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'RECRUITER B',
            'email' => 'recruiter_b@findhireme.com',
            'password' => Hash::make('recruiter'),
            'address' => 'Recruiter address 25',
            'gender' => 'male',
            'dob' => 'March 15',
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'USER A',
            'email' => 'user_a@findhireme.com',
            'password' => Hash::make('useruser'),
            'address' => 'User address 30',
            'gender' => 'female',
            'dob' => 'November 15',
            'role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'USER B',
            'email' => 'user_b@findhireme.com',
            'password' => Hash::make('useruser'),
            'address' => 'User address 40',
            'gender' => 'female',
            'dob' => 'December 1',
            'role' => 2,
        ]);
    }
}
