<?php

use Illuminate\Database\Seeder;
use App\Barangay;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = glob('C:\xampp\htdocs\capitol_app\public\data-need\barangays\*.csv');
        $data = file_get_contents($data[0]);
        $data = array_filter(explode("\n", $data));
        
        foreach($data as $index => $barangay) {
            list($province_code, $municipal_code, $code, $name, $type, $income_clssification, $ruralOrUrban, $population) = explode(",", $barangay);
            Barangay::create([
                'province_code' => $province_code,
                'city_code'     => $municipal_code,
                'code'          => $code,
                'name'          => iconv("ISO-8859-1", "UTF-8//TRANSLIT", $name),
                'type'          => $ruralOrUrban,
                'population'    => $population,
            ]);
        }
    }
}
