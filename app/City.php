<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public    $incrementing = false;
    protected $primaryKey   = 'zip_code';
    protected $fillable     = ['zip_code', 'name', 'status', 'code'];
    public const PROVINCE_CODE = '166800000';

    public function barangays()
    {
        return $this->hasMany('App\Barangay');
    }

    public function people()
    {
        return $this->hasMany('App\Person');
    }
}
