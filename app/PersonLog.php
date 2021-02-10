<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PersonLog extends Model
{
    protected $fillable = ['person_id', 'location', 'checker_id','purpose', 'body_temperature', 'time'];
    public function testing()
    {

    }

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function checker()
    {
        return $this->belongsTo('App\Checker');
    }

    public function getTimeAttribute($value)
    {
        list($date, $month, $year, $hours, $minutes, $greet) = explode('-', str_replace(' ', '-', $value));
        $date = $month .'/'. $date . '/' . $year . ' ' . $hours . ':' . $minutes . ' ' . $greet;
        return Carbon::parse($date)->format(' F d, Y h:i A');
        // return Carbon::parse($date)->format('m/d/Y');
    }
}
