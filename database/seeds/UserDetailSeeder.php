<?php

use App\User;
use App\UserDetail;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            $detail_count = 15 - intval( sqrt(rand(0, 15*15)) );

            $user->details()->createMany(
                factory(UserDetail::class, $detail_count)->make()->toArray()
            );
        }
    }
}
