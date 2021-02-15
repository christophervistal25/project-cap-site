<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PersonLog;
use Carbon\Carbon;
use App\SMS;

class NotifyController extends Controller
{
    public const HIGH_TEMPERATURE_NOTIFY = 37.8;

    public function message()
    {
        return SMS::where('status', 'active')->get(['id', 'phone_number', 'message']);
    }


    public function messageDone(Request $request)
    {
        $sms = SMS::find($request->message_id);
        $sms->status = 'in-active';
        $sms->save();

        return response()->json(['success' => true, 'message' => 'Successfully update the message.']);
    }

}
