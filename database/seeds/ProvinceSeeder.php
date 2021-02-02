<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces =
            [
                ['012800000', 'ILOCOS NORTE', '1st', '593081'], ['012900000', 'ILOCOS SUR', '1st', '689668'], ['013300000', 'LA UNION', '1st', '786653'], ['015500000', 'PANGASINAN', '1st', '2956726'], ['020900000', 'BATANES', '5th', '17246'], ['021500000', 'CAGAYAN', '1st', '1199320'], ['023100000', 'ISABELA', '1st', '1593566'], ['025000000', 'NUEVA VIZCAYA', '2nd', '452287'], ['025700000', 'QUIRINO', '3rd', '188991'], ['030800000', 'BATAAN', '1st', '760650'], ['031400000', 'BULACAN', '1st', '3292071'], ['034900000', 'NUEVA ECIJA', '1st', '2151461'], ['035400000', 'PAMPANGA', '1st', '(excluding CITY OF ANGELES) 2,198,110'], ['036900000', 'TARLAC', '1st', '1366027'], ['037100000', 'ZAMBALES', '2nd', '(excluding CITY OF OLONGAPO) 590,848'], ['037700000', 'AURORA', '3rd', '214336'], ['041000000', 'BATANGAS', '1st', '2694335'], ['042100000', 'CAVITE', '1st', '3678301'], ['043400000', 'LAGUNA', '1st', '3035081'], ['045600000', 'QUEZON', '1st', '(excluding CITY OF LUCENA) 1,856,582'], ['045800000', 'RIZAL', '1st', '2884227'], ['174000000', 'MARINDUQUE', '4th', '234521'], ['175100000', 'OCCIDENTAL MINDORO', '2nd', '487414'], ['175200000', 'ORIENTAL MINDORO', '1st', '844059'], ['175300000', 'PALAWAN', '1st', '(excluding CITY OF PUERTO PRINCESA) 849,469'], ['175900000', 'ROMBLON', '3rd', '292781'], ['050500000', 'ALBAY', '1st', '1314826'], ['051600000', 'CAMARINES NORTE', '2nd', '583313'], ['051700000', 'CAMARINES SUR', '1st', '1952544'], ['052000000', 'CATANDUANES', '3rd', '260964'], ['054100000', 'MASBATE', '1st', '892393'], ['056200000', 'SORSOGON', '2nd', '792949'], ['060400000', 'AKLAN', '2nd', '574823'], ['060600000', 'ANTIQUE', '2nd', '582012'], ['061900000', 'CAPIZ', '1st', '761384'], ['063000000', 'ILOILO', '1st', '(excluding ILOILO CITY) 1,936,423'], ['064500000', 'NEGROS OCCIDENTAL', '1st', '(excluding CITY OF BACOLOD)  2,497,261'], ['067900000', 'GUIMARAS', '4th', '174613'], ['071200000', 'BOHOL', '1st', '1313560'], ['072200000', 'CEBU', '1st', '(excluding the cities of CEBU, LAPU-LAPU, AND MANDAUE) 2,938,982 '], ['074600000', 'NEGROS ORIENTAL', '1st', '1354995'], ['076100000', 'SIQUIJOR', '5th', '95984'], ['082600000', 'EASTERN SAMAR', '2nd', '467160'], ['083700000', 'LEYTE', '1st', '(excluding CITY OF TACLOBAN) 1,724,679'], ['084800000', 'NORTHERN SAMAR', '2nd', '632379'], ['086000000', 'SAMAR (WESTERN SAMAR)', '1st', '780481'], ['086400000', 'SOUTHERN LEYTE', '3rd', '421750'], ['087800000', 'BILIRAN', '4th', '171612'], ['097200000', 'ZAMBOANGA DEL NORTE', '1st', '1011393'], ['097300000', 'ZAMBOANGA DEL SUR', '1st', '(excluding  CITY OF ZAMBOANGA) 1,010,674'], ['098300000', 'ZAMBOANGA SIBUGAY', '2nd', '633129'], ['101300000', 'BUKIDNON', '1st', '1415226'], ['101800000', 'CAMIGUIN', '5th', '88478'], ['103500000', 'LANAO DEL NORTE', '2nd', '(excluding CITY OF ILIGAN) 676,395'], ['104200000', 'MISAMIS OCCIDENTAL', '2nd', '602126'], ['104300000', 'MISAMIS ORIENTAL', '1st', '(excluding CITY OF CAGAYAN DE ORO) 888,509 '], ['112300000', 'DAVAO DEL NORTE', '1st', '1016332'], ['112400000', 'DAVAO DEL SUR', '1st', '632588'], ['112500000', 'DAVAO ORIENTAL', '1st', '558958'], ['118200000', 'COMPOSTELA VALLEY', '1st', '736107'], ['118600000', 'DAVAO OCCIDENTAL', '4th', '316342'], ['124700000', 'COTABATO (NORTH COTABATO)', '1st', '1379747'], ['126300000', 'SOUTH COTABATO', '1st', '(excluding CITY OF GENERAL SANTOS) 915,289'], ['126500000', 'SULTAN KUDARAT', '1st', '812095'], ['128000000', 'SARANGANI', '2nd', '544261'], ['140100000', 'ABRA', '3rd', '241160'], ['141100000', 'BENGUET', '2nd', '(excluding BAGUIO CITY) 444,224'], ['142700000', 'IFUGAO', '3rd', '202802'], ['143200000', 'KALINGA', '3rd', '212680'], ['144400000', 'MOUNTAIN PROVINCE', '4th', '154590'], ['148100000', 'APAYAO', '3rd', '119184'], ['150700000', 'BASILAN', '3rd', '(excluding CITY OF ISABELA) 346,579'], ['153600000', 'LANAO DEL SUR', '1st', '1045429'], ['153800000', 'MAGUINDANAO', '1st', '(excluding COTOBATO CITY) 1,173,933'], ['156600000', 'SULU', '2nd', '824731'], ['157000000', 'TAWI-TAWI', '3rd', '390715'], ['160200000', 'AGUSAN DEL NORTE', '3rd', '(excluding CITY OF BUTUAN) 354,503'], ['160300000', 'AGUSAN DEL SUR', '1st', '700653'], ['166700000', 'SURIGAO DEL NORTE', '2nd', '485088'], ['166800000', 'SURIGAO DEL SUR', '1st', '592250'], ['168500000', 'DINAGAT ISLANDS', '4th', '127152']
            ];

            foreach($provinces as $province) {
                list($code, $name, $classification, $population) = $province;
                Province::create([
                    'code'                  => $code,
                    'name'                  => $name,
                    'income_classification' => $classification,
                    'population'            => $population,
                ]);
            }


    }
}
