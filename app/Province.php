<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public    $primaryKey = 'code';
    protected $fillable   = ['code', 'name', 'income_classification', 'population'];
}
