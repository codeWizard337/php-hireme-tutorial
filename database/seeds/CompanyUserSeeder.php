<?php

use Illuminate\Database\Seeder;

class CompanyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_users')->insert([ 'company_id' => '1', 'user_id' => '2' ]);
        DB::table('company_users')->insert([ 'company_id' => '2', 'user_id' => '2' ]);
        DB::table('company_users')->insert([ 'company_id' => '5', 'user_id' => '2' ]);
        DB::table('company_users')->insert([ 'company_id' => '6', 'user_id' => '2' ]);

        DB::table('company_users')->insert([ 'company_id' => '1', 'user_id' => '3' ]);
        DB::table('company_users')->insert([ 'company_id' => '3', 'user_id' => '3' ]);
        DB::table('company_users')->insert([ 'company_id' => '4', 'user_id' => '3' ]);
    }
}
