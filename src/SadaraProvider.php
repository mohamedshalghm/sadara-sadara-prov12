<?php

namespace Sadara\SadaraProv;

use Illuminate\Support\ServiceProvider;

use Sadara\SadaraProv\SadaraFacades;

class SadaraProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!file_exists(base_path('config').'/initalize.php'))
        {
           $this->publishes([__DIR__.'/tools'=>base_path('config')]);
        }        

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['SadaraFacades']=$this->app->share(function
            (){
                return new SadaraFacades;
            });
    }
}
