<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PersonLog extends Model
{
    protected $fillable = ['person_id', 'location', 'checker_id', 'body_temperature', 'time'];

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
        return Carbon::parse($value)->format('l jS \\of F Y h:i:s A');
    }
}
