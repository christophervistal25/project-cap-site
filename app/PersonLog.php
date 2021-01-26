<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PersonLog extends Model
{
    protected $fillable = ['person_id', 'location', 'checker_id','purpose', 'body_temperature', 'time'];
    
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
        list($date, $time) = explode(' ', $value);
        $time = str_replace('-', ':', $time);
        return Carbon::parse($date . $time)->format('l jS \\of F Y h:i:s A');
    }
}
