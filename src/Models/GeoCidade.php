<?php

namespace DevApex\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCidade extends Model
{
    protected $table = 'geo_cidades';

    protected $fillable = ['id', 'nome', 'ibge', 'estado_id'];

    public function estado()
    {
        return $this->belongsTo(GeoEstado::class);
    }
}
