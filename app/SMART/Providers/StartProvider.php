<?php namespace SMART\Providers;

use Illuminate\Support\ServiceProvider;

class StartProvider extends ServiceProvider {

    public function boot()
    {
        \App::before(function($request)
        {

        });
    }

    /**
     * Register app bindings
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        
        /**
         * Storage Bindings
         */
        $app->bind('SMART\Storage\Interfaces\HotelRepositoryInterface', 'SMART\Storage\Eloquent\Repositories\HotelRepository');
       

        
        
    }

}