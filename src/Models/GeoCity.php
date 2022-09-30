<?php

namespace ArtisanLabs\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCity extends Model
{
    protected $table = 'geo_cities';

    protected $fillable = ['id', 'title', 'ibge', 'state_id'];

    public function state()
    {
        return $this->belongsTo(GeoState::class);
    }
}

class_alias(GeoCity::class, 'ArtisanLabs\LaravelGeoDatabase\GeoCidade');
