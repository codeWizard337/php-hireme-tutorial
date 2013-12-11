<?php

use App\Status;
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
        Status::insert([
            [ 'name' => 'pending' ],
            [ 'name' => 'accepted' ],
            [ 'name' => 'rejected' ],

            [ 'name' => 'published' ],
            [ 'name' => 'deleted' ],
        ]);
    }
}
