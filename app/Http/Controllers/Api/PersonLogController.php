<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PersonLog;

class PersonLogController extends Controller
{
    public function scanned(Request $request)
    {
        PersonLog::create([
            'person_id'        => $request->user_id,
            'location'         => $request->location,
            'checker_id'       => $request->checker_id,
            'body_temperature' => $request->temperature,
            'time'             => $request->time,
        ]);

        return response()->json(['code' => 200, 'message' => 'success']);
    }

    public function addMultiple(Request $request)
    {
        $data = json_decode($request->data, true);

        foreach($data as $person_log) {
            PersonLog::firstOrCreate([
                'person_id'        => $person_log['person_id'],
                'location'         => $person_log['location'],
                'body_temperature' => $person_log['body_temperature'],
                'time'             => $person_log['time'],
            ],
            [
                'person_id'        => $person_log['person_id'],
                'location'         => $person_log['location'],
                'checker_id'       => $person_log['checker_id'],
                'time'             => $person_log['time'],
                'body_temperature' => $person_log['body_temperature'],
            ]);
        }

        return response()->json(
            [
                'code' => 200, 'message' => 'Successfully add all the records.'
            ]
        );
    }
}
