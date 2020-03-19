<?php 

namespace agengdp\Bpjs\Providers;

class ServiceProvider  extends \Illuminate\Support\ServiceProvider{

    /**
     * Register services
     *
     * @return void
     */
    public function register(){

    }

    /**
     * Bootstrap services
     *
     * @return void
     */
    public function boot(){
        $this->app->configure('bpjs');
        $path = realpath(__DIR__ .'/../resources/config/bpjs.php');
        $this->mergeConfigFrom($path, 'bpjs');
    }
}