<?php

namespace App\Http\Controllers\Municipal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Establishment;
use App\City;
use App\Http\Controllers\Repositories\EstablishmentRepository;
use App\Barangay;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::get();
        return view('municipal.establishment.index', compact('establishments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = EstablishmentRepository::TYPES;
        $cities = City::where('status', 'active')->get();
        $barangay = Barangay::get();
        return view('municipal.establishment.create', compact('types', 'cities', 'barangay'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'office_store_name' => 'required',
            'type'              => 'required|in:' . implode(',', EstablishmentRepository::TYPES),
            'address'           => 'required|max:100',
            'contact_number'    => 'required',
            'province'          => 'required',
            'geo_tag_location'  => 'required',
            'city'              => 'required',
            'barangay'          => 'required',
        ], [], ['office_store_name' => 'name']);

        Establishment::create([
            'name'          => $request->office_store_name,
            'type'          => $request->type,
            'address'       => $request->address,
            'contact_no'    => $request->contact_number,
            'province'      => $request->province,
            'city_zip_code' => $request->city,
            'barangay_id'   => $request->barangay
        ]);

        return redirect()->back()->with('success', 'Successfully create new establishment.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
