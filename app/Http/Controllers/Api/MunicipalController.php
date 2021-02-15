<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Municipal;
use App\City;

class MunicipalController extends Controller
{
    public function filter(string $province_code)
    {
        Municipal::where('province_code', $province_code)
                ->where('status', 'active')
                ->get();
    }

    public function filterByName(string $name)
    {
        if(strtoupper($name) === 'ALL') {
            return City::get();
        } else {
            return City::where('name', 'like', '%' . $name . '%')->get();
        }
    }
}
