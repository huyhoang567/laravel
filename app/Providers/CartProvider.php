<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class A {
    public function a () {
        return 1000000;
    }
}

class CartProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 
        return new A();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
