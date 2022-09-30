<?php

namespace ArtisanLabs\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCountry extends Model
{
    protected $table = 'geo_paises';

    protected $fillable = ['id', 'nome', 'sigla', 'nome_en', 'sigla', 'bacen'];


    public function estados()
    {
        return $this->hasMany(GeoEstado::class);
    }
}

class_alias(GeoCountry::class, 'ArtisanLabs\GModel\Model');
