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
