<?php

namespace Tetravalence\Inspire;

use Illuminate\Support\ServiceProvider;

class InspireServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Indicates if loading of provider is deferred.
         *
         * @var boolval
         */
        protected $defer = false;

        /* Typically, you will need to publish your package's configuration file
         * to the application's own config directory.
         */
        $this->publishes([
            dirname(dirname(__FILE__)).
                '/config/inspire.php' => config_path('inspire.php'),
        ]);

        /* If your package contains routes, you may load them using the
         * loadRoutesFrom method.
         */
        $this->loadRoutesFrom(dirname(dirname(__FILE__)).
            '/routes/blog.php');

        /* If your package conains database migrations, you may use the
         * loadMigrationsFrom method to inform Laravel how to load them.
         */
        $this->loadMigrationsFrom(dirname(dirname(__FILE__)).
            '/database/migrations');
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
