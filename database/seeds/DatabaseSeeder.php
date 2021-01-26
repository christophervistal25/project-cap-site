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
            PresidentSeeder::class,
            // PersonSeeder::class,
            CitySeeder::class,
            OfficeSeeder::class,
            EstablishmentSeeder::class,
            // LogsSeeder::class,
        ]);
    }
}
