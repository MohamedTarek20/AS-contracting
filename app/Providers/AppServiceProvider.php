<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!request()->routeIs('admin.*')) {
            view()->composer('*', function ($view) {
                // $settings = Setting::pluck('value', 'identifier');
                $lang = Session::has('lang') && in_array(Session::get('lang'), ['ar', 'en']) ? Session::get('lang') : 'en';
                app()->setLocale($lang);
                $view->with([
                    // 'settings' => $settings,
                    'lang' => $lang
                ]);
            });
        }
    }
}
