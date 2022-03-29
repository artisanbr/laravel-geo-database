<?php

namespace DevApex\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoPais extends Model
{
    protected $table = 'geo_paises';

    protected $fillable = ['id', 'nome', 'sigla', 'nome_en', 'sigla', 'bacen'];


    public function estados()
    {
        return $this->hasMany(GeoEstado::class);
    }
}
