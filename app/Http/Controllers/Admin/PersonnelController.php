<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use Illuminate\Support\Str;
use App\Http\Controllers\Repositories\PersonnelRepository;
use Freshbitsweb\Laratables\Laratables;
use App\City;
use App\Barangay;
use Carbon\Carbon;

class PersonnelController extends Controller
{

    public const QR_SEPERATOR = ',';

    public function __construct(PersonnelRepository $personnelRepo)
    {
        $this->personnelRepository = $personnelRepo;
    }

    public function list(string $filter)
    {

        if($filter !== 'all') {
            return Laratables::recordsOf(Person::class, function($query) use ($filter) {
                return $query->where('city_zip_code', $filter);
            });
        } else {
            return Laratables::recordsOf(Person::class);
        }


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::where('status', 'active')->get();
        return view('admin.personnel.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::where('status', 'active')->get();
        $barangays = Barangay::get();
        $civil_status = PersonnelRepository::CIVIL_STATUS;
        return view('admin.personnel.create', compact('cities', 'barangays', 'civil_status'));
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
            'firstname'     => 'required|regex:/^[A-Za-z ]+$/u',
            'middlename'    => 'required|regex:/^[A-Za-z ]+$/u',
            'lastname'      => 'required|regex:/^[A-Za-z ]+$/u',
            'suffix'        => 'required',
            'date_of_birth' => 'required|date',
            'gender'        => 'required|in:' . implode(',', PersonnelRepository::GENDER),
            'address'       => 'required',
            'city'          => 'required|exists:cities,zip_code',
            'barangay'      => 'required|exists:barangays,id',
            'image'         => 'required',
            'province'      => 'required',
            'status'        => 'required|in:' . implode(',', PersonnelRepository::CIVIL_STATUS),
            'phone_number'  => 'required|unique:people',
        ],['image.required' => 'Please attach some image.']);

        if($request->has('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            // Process of storing image.
            $request->file('image')->storeAs('/public/images', $imageName);
        }

        $person = Person::create([
            'firstname'     => $request->firstname,
            'middlename'    => $request->middlename,
            'lastname'      => $request->lastname,
            'address'       => $request->address,
            'suffix'        => $request->suffix,
            'date_of_birth' => $request->date_of_birth,
            'image'         => $imageName ?? 'default.png',
            'gender'        => $request->gender,
            'city_zip_code' => $request->city,
            'barangay_id'   => $request->barangay,
            'generated_qr'  => '',
            'province'      => $request->province,
            'civil_status'  => $request->status,
            'phone_number'  => $request->phone_number,
            'age'           => $this->personnelRepository->getAge($request->date_of_birth),
        ]);

        return back()->with('success', $person->id);
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
        $this->validate($request, [
            "person_id"         => 'required|exists:people,id',
            "rapid_pass_no"     => 'required|unique:people,rapid_pass_no,' . $id,
            "firstname"         => 'required',
            "middlename"        => "required",
            "lastname"          => "required",
            "suffix"            => "sometimes|required",
            "sex"               => 'required|in:' . implode(',', PersonnelRepository::GENDER),
            "birthdate"         => "required",
            "rapid_test_date"   => "required",
            "permanent_address" => "required",
            "registered_date"   => "required",
        ]);

        $person = Person::find($id);

        $person->rapid_pass_no     = $request->rapid_pass_no;
        $person->firstname         = $request->firstname;
        $person->middlename        = $request->middlename;
        $person->lastname          = $request->lastname;
        $person->suffix            = $request->suffix;
        $person->gender               = $request->sex;
        $person->date_of_birth         = $request->birthdate;
        $person->rapid_test_issued   = $request->rapid_test_date;
        $person->address = $request->permanent_address;
        $person->save();


        return response()->json(['success' => true]);

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
