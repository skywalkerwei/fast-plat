<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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

        $this->app->bind(\App\Repository\Interfaces\GoodsRepository::class, \App\Repository\Repositories\GoodsRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Interfaces\GoodsAttributeRepository::class, \App\Repository\Repositories\GoodsAttributeRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Interfaces\GoodsSpecificationRepository::class, \App\Repository\Repositories\GoodsSpecificationRepositoryEloquent::class);
        //:end-bindings:
    }
}
