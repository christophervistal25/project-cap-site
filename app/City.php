<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\CityScope;

class City extends Model
{
    public    $incrementing = false;
    protected $primaryKey   = 'code';
    protected $fillable     = ['name', 'status', 'province_code', 'code'];
    public const PROVINCE_CODE = '166800000';



     /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new CityScope);
    }

    public function barangays()
    {
        return $this->hasMany('App\Barangay');
    }

    public function people()
    {
        return $this->hasMany('App\Person');
    }

    /**
     * Returns the action column html for datatables.
     *
     * @param \App\City
     * @return string
     */
    public static function laratablesCustomAction($city)
    {
        return view('admin.setting.includes.index', compact('city'))->render();
    }
}
