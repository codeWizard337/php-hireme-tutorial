<?php

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
        $this->insert([ 'name' => 'Google', 'logo' => 'public/company/random.png' ]);
        $this->insert([ 'name' => 'Facebook', 'logo' => 'public/company/random.png' ]);
        $this->insert([ 'name' => 'Twitter', 'logo' => 'public/company/random.png' ]);

        $this->insert([ 'name' => 'Traveloka', 'logo' => 'public/company/random.png' ]);
        $this->insert([ 'name' => 'Tiket.com', 'logo' => 'public/company/random.png' ]);

        $this->insert([ 'name' => 'Tokopedia', 'logo' => 'public/company/random.png' ]);
        $this->insert([ 'name' => 'Shopee', 'logo' => 'public/company/random.png' ]);
        $this->insert([ 'name' => 'Bukalapak', 'logo' => 'public/company/random.png' ]);
    }

    private function insert($value) {
        DB::table('companies')->insert([
            'name' => $value['name'],
            'logo' => $value['logo'],
        ]);
    }
}
