<?php

use Illuminate\Database\Seeder;
use App\Establishment;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Agriculture ',
            'Bank ',
            'Barangay Hall ',
            'Checkpoint ',
            'Church ',
            'City Hall ',
            'City Health Office ',
            'Clinic ',
            'Convenience Store ',
            'Department Store ',
            'Gas Station ',
            'Government Office ',
            'Hardware ',
            'Hospital ',
            'Hotel ',
            'Insurance ',
            'Laboratory ',
            'Mall ',
            'Market ',
            'Military Installation ',
            'Pharmacy/Drugstore ',
            'Police Station ',
            'Public Vehicle ',
            'Remittance Center ',
            'Restaurant ',
            'Roving Team ',
            'School ',
            'Store ',
            'Supermarket ',
            'Others',
        ];

        foreach($data as $d) {
            Establishment::create([
                'name' => $d,
            ]);
        }
    }
}
