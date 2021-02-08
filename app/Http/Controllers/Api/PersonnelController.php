<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\PersonnelRepository;

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
}
