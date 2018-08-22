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
        view()->share('siteTitle', 'MooraWay - Почта пассажирами самолёта | Быстрая доставка!');
        view()->share('siteDescription', 'Отправка посылок через людей. MooraWay самая быстрая почта самолётом, быстрая доставка документов, и другое!');
        view()->share('siteKeywords', 'быстрая доставка документов, mooraway, почта самолётом, авиа почта');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
