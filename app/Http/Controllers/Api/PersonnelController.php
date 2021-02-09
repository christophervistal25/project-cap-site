<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\PersonnelRepository;
use App\Barangay;
use App\Person;
use Carbon\Carbon;

class PersonnelController extends Controller
{
    public function __construct(PersonnelRepository $personnelRepository)
    {
        $this->personnelRepository = $personnelRepository;
    }

    public function make(Request $request)
    {
        $personId = $this->personnelRepository->makeIDForMobile($request->all());
        return response()->json(
            [
                'code' => 200,
                'message' => 'Successfully generate id for person.',
                'person_id' => $personId
            ]
        );
    }

    public function register(Request $request)
    {
        $barangay = Barangay::where('name', $request->barangay)->first();
        $person = Person::firstOrCreate(
            [
                'firstname'         => $request->firstname,
                'middlename'        => $request->middlename,
                'lastname'          => $request->lastname,
                'suffix'            => $request->suffix,
                'date_of_birth'     => Carbon::parse($request->date_of_birth)->format('Y-m-d'),
            ]
            ,[
            'firstname'         => $request->firstname,
            'middlename'        => $request->middlename,
            'lastname'          => $request->lastname,
            'suffix'            => $request->suffix,
            'temporary_address' => $request->street . ' ' . $request->purok . ' ' . $request->barangay . ' ' . $request->city . ' ' . $request->province,
            'address'           => $request->street . ' ' . $request->purok . ' ' . $request->barangay . ' ' . $request->city . ' ' . $request->province,
            'date_of_birth'     => Carbon::parse($request->date_of_birth)->format('Y-m-d'),
            'gender'            => $request->gender,
            'province_code'     => $barangay->province_code,
            'city_code'         => $barangay->city_code,
            'barangay_code'     => $barangay->code,
            'image'             => 'default.png',
            'age'               => $this->personnelRepository->getAge($request->date_of_birth),
            'civil_status'      => $request->civil_status,
            'phone_number'      => $request->mobile_number,
            'landline_number'   => $request->landline_number,
            'email'             => $request->email,
            'registered_from'   => $request->registered_from,
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Account successfully create.',
            'person_id' => $person->person_id,
        ]);
    }
}
