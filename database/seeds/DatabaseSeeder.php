<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AdminSeeder::class,
        	MunicipalSeeder::class,
            CheckerSeeder::class,
            // PersonSeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            BarangaySeeder::class,
            // OfficeSeeder::class,
            // EstablishmentSeeder::class,
            // LogsSeeder::class,
        ]);
    }
}
