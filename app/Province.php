<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ProvinceScope;

class Province extends Model
{
    public    $primaryKey = 'code';
    protected $fillable   = ['code', 'name', 'income_classification', 'population'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new ProvinceScope);
    }

}
