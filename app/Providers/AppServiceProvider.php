<?php

namespace App\Providers;

//use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View;
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
        //
        $menu = [
            'index' => 'index page',
            'local' => 'local page'
        ];
        View::share('key', $menu);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
