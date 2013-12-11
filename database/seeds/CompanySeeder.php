<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            [ 'name' => 'Google', 'logo' => 'public/company/random.png' ],
            [ 'name' => 'Facebook', 'logo' => 'public/company/random.png' ],
            [ 'name' => 'Twitter', 'logo' => 'public/company/random.png' ],

            [ 'name' => 'Traveloka', 'logo' => 'public/company/random.png' ],
            [ 'name' => 'Tiket.com', 'logo' => 'public/company/random.png' ],

            [ 'name' => 'Tokopedia', 'logo' => 'public/company/random.png' ],
            [ 'name' => 'Shopee', 'logo' => 'public/company/random.png' ],
            [ 'name' => 'Bukalapak', 'logo' => 'public/company/random.png' ],
        ]);
    }
}
