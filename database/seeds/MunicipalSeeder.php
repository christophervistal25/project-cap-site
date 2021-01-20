<?php

use App\Municipal;
use Illuminate\Database\Seeder;

class MunicipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Municipal::create([
            // 'email'         => 'chris@yahoo.com',
            'username'      => 'user',
            // 'phone_number'  => '09663765072',
            'city_zip_code' => 8300,
            'password'      => bcrypt('christopher'),
        ]);
    }
}
