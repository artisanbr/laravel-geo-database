<?php

namespace ArtisanLabs\LaravelGeoDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCountry extends Model
{
    protected $table = 'geo_countries';

    protected $fillable = ['id', 'title', 'slug', 'title_en', 'bacen'];


    public function states()
    {
        return $this->hasMany(GeoState::class);
    }
}

class_alias(GeoCountry::class, 'ArtisanLabs\LaravelGeoDatabase\GeoPais');
