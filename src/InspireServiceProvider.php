<?php

namespace Tetravalence\Inspire;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class InspireServiceProvider extends ServiceProvider
{
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
        $this->publishes([
            dirname(dirname(__FILE__)).
                '/config/inspire.php' => config_path('inspire.php'),
            ], 'inspire-config');

        /* If your package contains routes, you may load them using the
         * loadRoutesFrom method.
         */
         Route::group([
             'namespace' => 'Tetravalence\Inspire\Http\Controllers',
         ], function () {
            $this->loadRoutesFrom(dirname(dirname(__FILE__)).
                '/routes/blog.php');
        });

        /* If your package conains database migrations, you may use the
         * loadMigrationsFrom method to inform Laravel how to load them.
         */
        $this->loadMigrationsFrom(dirname(dirname(__FILE__)).
            '/database/migrations');

        /* To register the package's views with Laravel, you need to use the
         * service provider's LoadViewsFrom method.
         */
         $this->loadViewsFrom(dirname(dirname(__FILE__)).
            '/resources/views', 'inspire');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
