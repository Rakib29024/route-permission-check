<?php

namespace Rakib29024\Permission;

use Illuminate\Support\ServiceProvider;
use Rakib29024\Permission\Services\RoutePermission;

class RoutePermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ .'routes/web.php');
        $this->app->singleton('Permission',function($app){
            return new RoutePermission();
        });
    }
}
