<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checker extends Model
{
    protected $fillable = ['username','firstname','middlename','lastname', 'suffix', 'password', 'city_zip_code'];

    protected $hidden = [
    	'password'
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function logs()
    {
        return $this->hasMany('App\PersonLog');
    }

}
