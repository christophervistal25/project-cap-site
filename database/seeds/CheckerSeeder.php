<?php

use Illuminate\Database\Seeder;
use App\Checker;

class CheckerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checker::create([
            'firstname'     => 'christopher',
            'middlename'    => 'platino',
            'lastname'      => 'vistal',
            'city_zip_code' => '8300',
            'username'      => 'tooshort01',
            'password'      => bcrypt('christopher')
        ]);
    }
}
