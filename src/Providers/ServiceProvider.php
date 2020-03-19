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
        $this->publishes([
            __DIR__ . '/../resources/config/bpjs.php'   => config_path('bpjs.php')
        ]);
    }
}