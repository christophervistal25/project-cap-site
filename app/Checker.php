<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checker extends Model
{
    protected $fillable = ['username','firstname','middlename','lastname', 'suffix', 'password', 'municipal_code', 'phone_number'];

    protected $hidden = [
    	'password'
    ];

    public function city()
    {
        return $this->belongsTo('App\City', 'municipal_code', 'code');
    }

    public function logs()
    {
        return $this->hasMany('App\PersonLog');
    }

}
