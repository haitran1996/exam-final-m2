<?php

namespace App\Providers;

use App\Contracts\ContactRepositoryInterface;
use App\Contracts\ContactServiceInterface;
use App\Repositories\ContactRepository;
use App\Services\ContactService;
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
        $this->app->singleton(ContactServiceInterface::class, ContactService::class);
        $this->app->singleton(ContactRepositoryInterface::class, ContactRepository::class);
    }
}
