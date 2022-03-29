<?php

namespace DevApex\LaravelGeoDatabase;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class GeoDatabaseServiceProvider extends ServiceProvider
{

    private $resources_path = __DIR__ . "/resources/";
    private $views_path = __DIR__ . "/resources/views/";
    private $models_path = __DIR__ . "/Models/";
    private $commands_path = __DIR__ . "/Commands/";
    private $database_path = __DIR__ . "/database/";
    private $routes_file = __DIR__ . "/routes/geo.php";

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        //Commands
        $this->commands([
            Commands\GeoDBCommand::class
        ]);

        //Rotas
        if(file_exists(base_path('routes/geo.php')) || file_exists($this->routes_file)) {
            //$this->loadRoutesFrom(base_path('routes/api_generated.php'));
            Route::prefix('geo')
                ->prefix('geo')
                ->as('api.geo.')
                ->domain(config('router.api.domain', null))
                ->middleware(['api','guest'])
                ->group(file_exists(base_path('routes/geo.php')) ? base_path('routes/geo.php') : $this->routes_file);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Routes
        $this->publishes([
            $this->routes_file => base_path('routes/geo.php'),
        ], 'routes');

        //Models
        $this->publishes([
            $this->models_path => app_path('Models'),
        ], 'models');

        //Database
        $this->publishes([
            $this->database_path => database_path(),
        ], 'db');

        //Views
        if($this->app->has('view')){
            $this->loadViewsFrom($this->views_path, 'router');

            $this->publishes([
                $this->views_path => resource_path('views/vendor/router'),
            ], 'views');
        }

        /*if(file_exists(base_path('routes/api_generated.php'))){
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api_generated.php'));
        }*/
    }
}
