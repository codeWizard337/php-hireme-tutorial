<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->states('admin')->create([
            'name' => 'ADMIN',
            'email' => 'admin@findhireme.com',
        ]);

        factory(User::class)->states('recruiter')->create([
            'name' => 'RECRUITER A',
            'email' => 'recruiter_a@findhireme.com',
        ]);

        factory(User::class)->states('recruiter')->create([
            'name' => 'RECRUITER B',
            'email' => 'recruiter_b@findhireme.com',
        ]);

        factory(User::class)->create([
            'name' => 'USER A',
            'email' => 'user_a@findhireme.com',
        ]);

        factory(User::class)->create([
            'name' => 'USER B',
            'email' => 'user_b@findhireme.com',
        ]);

        factory(User::class, 15)->create();
    }
}
