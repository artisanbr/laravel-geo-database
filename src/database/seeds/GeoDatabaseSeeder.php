<?php
namespace DevApex\LaravelGeoDatabase\database\seeds;

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
        //$this->call(GeoPaisesTableSeeder::class);
        //$this->call(GeoEstadosTableSeeder::class);
        $this->call(GeoCidadesTableSeeder::class);
    }
}
