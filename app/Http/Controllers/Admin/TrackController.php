<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Freshbitsweb\Laratables\Laratables;
use App\Person;
use App\PersonLog;
use App\SMS;
use Carbon\Carbon;

class TrackController extends Controller
{

    public function find()
    {
        return Laratables::recordsOf(Person::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.track.index');
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
        $person = Person::with('logs')->find($id);
        return view('admin.track.show', compact('person'));
    }


    public function notify(Request $request)
    {
        $phoneNumbers = explode('|', $request->phone_numbers);
        foreach(array_filter($phoneNumbers) as $mobileNumber) {
            SMS::create(['phone_number' => $mobileNumber]);
        }

        return back()->with('success', 'Success!');
    }

    /**
     * int @id log id
     */
    public function track($id)
    {
        if(request()->ajax()) {
            $personColumns = 'person:id,person_id,firstname,middlename,lastname,suffix,phone_number';

            $log = PersonLog::find($id);
            $time = Carbon::parse($log->time)->format('d-m-y');
            return PersonLog::with([$personColumns, 'checker'])
                            ->where('time', 'like', $time . '%')
                            ->where('location', $log->location)
                            ->where('person_id', '!=', $log->person_id)->get();
            return $log;
        }
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
