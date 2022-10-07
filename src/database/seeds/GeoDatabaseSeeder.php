<?php
namespace ArtisanLabs\LaravelGeoDatabase\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(GeoCountriesTableSeeder::class);
        $this->call(GeoStatesTableSeeder::class);
        $this->call(GeoCitiesTableSeeder::class);
    }
}
