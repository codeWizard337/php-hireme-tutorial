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
            [ 'name' => 'Google', 'logo' => 'public/company/google.png' ],
            [ 'name' => 'Facebook', 'logo' => 'public/company/facebook.png' ],
            [ 'name' => 'Twitter', 'logo' => 'public/company/twitter.png' ],

            [ 'name' => 'Traveloka', 'logo' => 'public/company/traveloka.png' ],
            [ 'name' => 'Tiket.com', 'logo' => 'public/company/tiket.png' ],

            [ 'name' => 'Tokopedia', 'logo' => 'public/company/tokopedia.jpeg' ],
            [ 'name' => 'Shopee', 'logo' => 'public/company/shopee.jpeg' ],
            [ 'name' => 'Bukalapak', 'logo' => 'public/company/bukalapak.png' ],
        ]);
    }
}
