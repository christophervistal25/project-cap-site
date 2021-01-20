<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barangay;

class BarangayController extends Controller
{
    public function dataByCity($cityId)
    {
        return Barangay::where('city_zip_code', $cityId)
                        ->get(['id', 'name']);
    }
}
