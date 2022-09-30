<?php

namespace ArtisanLabs\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoState extends Model
{
    protected $table = 'geo_states';

    protected $fillable = ['id', 'title', 'slug', 'ibge', 'phone_prefix', 'country_id'];

    public function cities(){
        return $this->hasMany(GeoCity::class);
    }

    public function country(){
        return $this->belongsTo(GeoCountry::class);
    }
}

class_alias(GeoState::class, 'ArtisanLabs\LaravelGeoDatabase\GeoEstado');
