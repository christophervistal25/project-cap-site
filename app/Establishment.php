<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = ['name', 'type', 'address', 'contact_no', 'geo_tag_location', 'province', 'city_zip_code', 'barangay_id'];

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
