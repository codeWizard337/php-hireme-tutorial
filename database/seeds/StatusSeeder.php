<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([ 'name' => 'pending' ]);
        DB::table('status')->insert([ 'name' => 'accepted' ]);
        DB::table('status')->insert([ 'name' => 'rejected' ]);

        DB::table('status')->insert([ 'name' => 'published' ]);
        DB::table('status')->insert([ 'name' => 'deleted' ]);
    }
}
