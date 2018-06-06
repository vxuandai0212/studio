<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Photo\PhotoRepositoryInterface::class,
            \App\Repositories\Photo\PhotoEloquentRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Mail\MailRepositoryInterface::class,
            \App\Repositories\Mail\MailEloquentRepository::class
        );
    }
}
