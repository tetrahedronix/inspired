<?php

namespace Tetravalence\Inspired;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Tetravalence\Inspired\InspiredTemplate as Template;

class InspiredServiceProvider extends ServiceProvider
{
    use InspiredServiceBindings;
    /**
     * Indicates if loading of provider is deferred.
     *
     * @var boolval
     */
    protected $defer = false;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Typically, you will need to publish your package's configuration file
         * to the application's own config directory.
         */
        $this->bootAssetPublishing();

        /* If your package contains routes, you may load them using the
         * loadRoutesFrom method.
         */
        $this->app->booted([$this, 'bootRoutes']);

        /* If your package conains database migrations, you may use the
         * loadMigrationsFrom method to inform Laravel how to load them.
         */
        $this->bootMigrations();

        /* To register the package's views with Laravel, you need to use the
         * service provider's LoadViewsFrom method.
         */
        $this->bootResources();
    }

    /**
     * Define the asset publishing configuration.
     *
     * @return void
     */
    protected function bootAssetPublishing()
    {
        $this->publishes([
            dirname(dirname(__FILE__)).
                '/config/inspired.php' => config_path('inspired.php'),
            ], 'inspired-config');
    }

    /**
     * Register the Inspired migrations.
     *
     * @return void
     */
    protected function bootMigrations()
    {
        $this->loadMigrationsFrom(dirname(dirname(__FILE__)).
            '/database/migrations');
    }

    /**
     * Register the Inspired resources.
     *
     * @return void
     */
    protected function bootResources()
    {
        $this->loadViewsFrom(dirname(dirname(__FILE__)).
           '/resources/views'.Template::getTheme(), 'inspired');
    }

    /**
     * Register the Inspired routes.
     *
     * @return void
     */
    public function bootRoutes()
    {
        Route::group([
            'namespace' => 'Tetravalence\Inspired\Http\Controllers',
        ], function () {
           $this->loadRoutesFrom(dirname(dirname(__FILE__)).
               '/routes/web.php');
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* To merge your own package configuration file with the application's
         * copy.
         */
        $this->registerConfiguration();
        /* Register bindings in the container.
         */
        $this->registerServices();
    }

    /**
     * Setup the configuration for Inspired.
     *
     * @return void
     */
    protected function registerConfiguration()
    {
        $packageConfigFile = dirname(dirname(__FILE__)) . '/config/inspired.php';

        $this->mergeConfigFrom($packageConfigFile, 'inspired');
    }

    /**
     * Register Inspired's services in the container.
     *
     * @return void
     */
    public function registerServices()
    {
        foreach ($this->serviceBindings as $key => $value) {
            is_numeric($key) ?
                $this->app->singleton($value) :
                $this->app->singleton($key, $value);
        }
    }
}
