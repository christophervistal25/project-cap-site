<?php

namespace App\Http\Controllers\Municipal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use App\Barangay;
use Illuminate\Support\Str;
use Freshbitsweb\Laratables\Laratables;
use Auth;
use App\Http\Controllers\Repositories\PersonnelRepository;
class PersonnelController extends Controller
{

    public const QR_SEPERATOR = ',';

    public function __construct()
    {
        $this->middleware('auth:municipal');
    }

    public function list()
    {
        $zip_code = Auth::user()->city_zip_code;

        return Laratables::recordsOf(Person::class, function ($query) use($zip_code) {
            return $query->where('city_zip_code', $zip_code);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangays = Auth::user()->city->barangays;
        return view('municipal.personnel.index', compact('barangays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangays = Barangay::where('city_zip_code', Auth::user()->city_zip_code)->get();
        return view('municipal.personnel.create', compact('barangays'));
    }

     /*
        QR FORMAT
        MIDDLENAME, LASTNAME, SUFFIX, ADDRESS, BARANGAY, DATE OF BIRTH, RAPID_ISSUED
    */
    private function generateQRData(array $data)
    {
        $barangay = Barangay::find($data['barangay']);

        return $data['firstname'] . self::QR_SEPERATOR . $data['middlename'] . self::QR_SEPERATOR . $data['lastname']
        . self::QR_SEPERATOR . $data['suffix'] . self::QR_SEPERATOR . $barangay->name . self::QR_SEPERATOR . $data['date_of_birth'] . self::QR_SEPERATOR . $data['rapid_test_issued'];

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // |regex:/^[A-Za-z ]+$/u
        $this->validate($request, [
            'firstname'         => 'required',
            'middlename'        => 'required',
            'lastname'          => 'required',
            'suffix'            => 'required',
            'gender'            => 'required|in:' . implode(',', PersonnelRepository::GENDER),
            'date_of_birth'     => 'required|date',
            'rapid_pass_no'     => 'required',
            'rapid_test_issued' => 'required|date',
            'address'           => 'required',
            'barangay'          => 'required|exists:barangays,id',
            'image'             => 'required',
        ]);

        if($request->has('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            // Process of storing image.
            $request->file('image')->storeAs('/public/images', $imageName);
        }


        $person = Person::create([
            'firstname'         => $request->firstname,
            'middlename'        => $request->middlename,
            'lastname'          => $request->lastname,
            'address'           => $request->address,
            'suffix'            => $request->suffix,
            'date_of_birth'     => $request->date_of_birth,
            'rapid_test_issued' => $request->rapid_test_issued,
            'image'             => $imageName ?? 'default.png',
            'rapid_pass_no'     => $request->rapid_pass_no,
            'gender'            => $request->gender,
            'city_zip_code'     => Auth::user()->city_zip_code,
            'barangay_id'       => $request->barangay,
            'generated_qr'      => '',
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
        $barangays = Auth::user()->city->barangays;
        $person = Person::find($id);
        return view('municipal.personnel.edit', compact('person', 'barangays'));
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
        // |regex:/^[A-Za-z ]+$/u
        $this->validate($request, [
            'firstname'         => 'required',
            'middlename'        => 'required',
            'lastname'          => 'required',
            'birthdate'     => 'required|date',
            'sex'               => 'required|in:' . implode(',', PersonnelRepository::GENDER),
            'rapid_pass_no' => 'required',
            'rapid_test_date'   => 'required|date',
            'permanent_address' => 'required',
            // 'barangay'          => 'required|exists:barangays,id'
        ]);


        $this->validate($request, [
            "person_id"         => 'required|exists:people,id',
            "rapid_pass_no"     => 'required|unique:people,rapid_pass_no,' . $id,
            "firstname"         => 'required',
            "middlename"        => "required",
            "lastname"          => "required",
            "suffix"            => "sometimes|required",
            "sex"               => 'required',
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
        $person->gender            = $request->sex;
        $person->date_of_birth     = $request->birthdate;
        $person->rapid_test_issued = $request->rapid_test_date;
        $person->address           = $request->permanent_address;
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
