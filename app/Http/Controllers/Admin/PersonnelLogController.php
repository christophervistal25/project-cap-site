<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use Auth;
use App\City;
use App\Barangay;

class PersonnelLogController extends Controller
{
    /**
     * @id Person ID
     */
    public function show($id)
    {
        $person = Person::with('logs')->find($id);
        $cities = City::get();
        $barangays = Barangay::get();
        return view('admin.personnel_logs.show', compact('person', 'cities', 'barangays'));
    }

    public function update(Request $request, Person $id)
    {

        // Validation first.
        $this->validate($request, [
            "rapid_pass_no"     => 'required:unique:persons,rapid_pass_no,' . $id,
            "firstname"         => 'required',
            "middlename"        => 'required',
            "lastname"          => 'required',
            "date_of_birth"     => 'required|date',
            "rapid_test_issued" => 'required|date',
            "address"           => 'required',
            "city"              => 'required|exists:cities,zip_code',
            "barangay"          => 'required:exists:barangays,id',
            "gender"            => 'required|in:male,female',
        ]);

        // Update the Person.

        $person                    = $id;
        $person->firstname         = $request->firstname;
        $person->middlename        = $request->middlename;
        $person->lastname          = $request->lastname;
        $person->suffix            = $request->suffix;
        $person->date_of_birth     = $request->date_of_birth;
        $person->rapid_pass_no     = $request->rapid_pass_no;
        $person->rapid_test_issued = $request->rapid_test_issued;
        $person->address           = $request->address;
        $person->city_zip_code     = $request->city;
        $person->barangay_id       = $request->barangay;
        $person->gender            = $request->gender;
        $person->save();



        // Redirect back.

        return redirect()->route('personnel.logs', $person->id)->with('success', 'Successfully update personnel information.');
    }
}
