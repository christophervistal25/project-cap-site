<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;
use Freshbitsweb\Laratables\Laratables;


class CityController extends Controller
{
    public function data()
    {
        return City::get(['zip_code', 'name']);
    }

    public function list()
    {
        return Laratables::recordsOf(City::class);
    }

    public function index()
    {
        return view('admin.city.index');
    }
}
