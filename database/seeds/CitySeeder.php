<?php

use Illuminate\Database\Seeder;
use App\City;
use App\Barangay;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $data = [
            'BISLIG,166803000,8311',
            'TANDAG,166819000,8300',
            'BAROBO,166801000,8309',
            'BAYABAS,166802000,8303',
            'CAGWAIT,166804000,8304',
            'CANTILAN,166805000,8317',
            'CARMEN,166806000,8315',
            'CARRASCAL,166807000,8318',
            'CORTES,166808000,8313',
            'HINATUAN,166809000,8310',
            'LANUZA,166810000,8314',
            'LIANGA,166811000,8307',
            'LINGIG,166812000,8312',
            'MADRID,166813000,8316',
            'MARIHATAG,166814000,8306',
            'SAN AGUSTIN,166815000,8305',
            'SAN MIGUEL,166816000,8301',
            'TAGBINA,166817000,8308',
            'TAGO,166818000,8302',
        ];

        foreach($data as $d) {
            list($city, $code, $zip_code) = explode(',', $d);
            City::create([
                'zip_code' => $zip_code,
                'name'     => $city,
                'code'     => $code,
            ]);
        }
       
        $barangays = glob('C:\xampp\htdocs\project-cap-site\public\data-need\barangays\*.csv');

       foreach($barangays as $barangay) {
        $row = 1;
        if (($handle = fopen($barangay, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            if($num === 3) {
                // No type
                list($barangayName, $barangayCode, $barangayZipCode) = $data;
                Barangay::create([
                    'name' => $barangayName,
                    'code' => $barangayCode,
                    'city_zip_code' => $barangayZipCode,
                ]);
            } else if($num === 4) {
                // With Type
                list($barangayName, $barangayCode, $barangayType, $barangayZipCode) = $data;
                Barangay::create([
                    'name' => $barangayName,
                    'code' => $barangayCode,
                    'city_zip_code' => $barangayZipCode,
                ]);
            }
            $row++;

          }
          fclose($handle);
        }
       }
    }
}
