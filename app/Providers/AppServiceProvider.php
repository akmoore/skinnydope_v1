<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout-front.front', 'App\Http\Composers\FrontComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\SkinnyDope\Interfaces\ProductInterface', 'App\SkinnyDope\Repositories\ProductRepo');
        $this->app->bind('App\SkinnyDope\Interfaces\ImageInterface', 'App\SkinnyDope\Repositories\ImageRepo');
        $this->app->bind('App\SkinnyDope\Interfaces\CartInterface', 'App\SkinnyDope\Repositories\CartRepo');
        $this->app->bind('App\SkinnyDope\Interfaces\BlurbInterface', 'App\SkinnyDope\Repositories\BlurbRepo');
        $this->app->bind('App\SkinnyDope\Interfaces\EventInterface', 'App\SkinnyDope\Repositories\EventRepo');
        $this->app->bind('App\SkinnyDope\Interfaces\UserInterface', 'App\SkinnyDope\Repositories\UserRepo');
    }
}
