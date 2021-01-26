<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = ['name', 'type', 'address', 'contact_no', 'geo_tag_location', 'province', 'city_zip_code', 'barangay_id'];
}
