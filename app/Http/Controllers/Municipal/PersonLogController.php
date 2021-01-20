<?php

namespace App\Http\Controllers\Municipal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use Auth;
use App\City;
use App\Barangay;

class PersonLogController extends Controller
{

    public function get($id)
    {
        return Person::with('logs')->find($id);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::with('logs', 'logs.checker')->find($id);
        $barangays = Barangay::where('city_zip_code', Auth::user()->city_zip_code)->get();
        return view('municipal.personnel_logs.show', compact('person', 'barangays'));
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
    public function update(Request $request, Person $person)
    {
        $this->validate($request, [
            'rapid_pass_no'     => 'required',
            'firstname'         => 'required',
            'middlename'        => 'required',
            'lastname'          => 'required',
            'date_of_birth'     => 'required|date',
            'rapid_test_issued' => 'required|date',
            'address'           => 'required',
            'barangay'          => 'required|exists:barangays,id',
            'gender'            => 'required|in:male,female',
        ]);

        $person->firstname         = $request->firstname;
        $person->middlename        = $request->middlename;
        $person->lastname          = $request->lastname;
        $person->date_of_birth     = $request->date_of_birth;
        $person->rapid_test_issued = $request->rapid_test_issued;
        $person->address           = $request->address;
        $person->barangay_id       = $request->barangay;
        $person->gender            = $request->gender;

        $person->save();

        return back()->with('success', 'Successfully update personnel information.');
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
