<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        Carbon::macro('toFormattedDate', function () {
            return $this->format('Y-m-d');
        });

        Carbon::macro('toFormattedTime', function () {
            return $this->format('h:i A');
        });

        \Carbon\Carbon::setLocale($this->app->getLocale());

    }
}
