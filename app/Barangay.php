<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $fillable = ['name', 'code', 'status'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function people()
    {
        return $this->hasMany('App\Person');
    }

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = ucfirst(strtolower($value));
    // }
}
