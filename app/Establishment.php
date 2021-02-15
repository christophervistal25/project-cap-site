<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = ['name', 'type', 'address', 'contact_no', 'latitude','longitude', 'province_code', 'city_code', 'barangay_code'];



    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function barangay()
    {
        return $this->belongsTo('App\Barangay');
    }

    /**
     * Returns the action column html for datatables.
     *
     * @param \App\Person
     * @return string
     */
    public static function laratablesCustomAdminAction($establishment)
    {
        return view('admin.establishment.includes.index_action', compact('establishment'))->render();
        return view('municipal.establishment.includes.index_action', compact('establishment'))->render();
    }

}
