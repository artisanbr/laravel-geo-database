<?php

namespace DevApex\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoEstado extends Model
{
    protected $table = 'geo_estados';

    protected $fillable = ['id', 'nome', 'uf', 'ibge', 'ddd', 'pais_id'];

    public function cidades(){
        return $this->hasMany(GeoCidade::class);
    }

    public function pais(){
        return $this->belongsTo(GeoPais::class);
    }
}
