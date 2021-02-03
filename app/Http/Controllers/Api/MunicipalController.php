<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Municipal;

class MunicipalController extends Controller
{
    public function filter(string $province_code)
    {
        Municipal::where('province_code', $province_code)
                ->where('status', 'active')
                ->get();        
    }
}
