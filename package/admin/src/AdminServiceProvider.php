<?php

namespace sevag\admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');
        $this->publishes([
            __DIR__.'/../public' => public_path('sevag/admin'),
        ], 'public');
    }

    public function register(){

    }
}