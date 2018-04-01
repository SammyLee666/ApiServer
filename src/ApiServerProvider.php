<?php

namespace Specification\ApiServer;

use Illuminate\Support\ServiceProvider;

class ApiServerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom( __DIR__ . '/../database/migrations' );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("Server", function(){
            return new Server(new Error());
        });

        $this->app->bind("Server", function(){
            return new Server(new Error());
        });
    }
}
