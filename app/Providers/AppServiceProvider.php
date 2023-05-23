<?php

namespace App\Providers;

use App\Repositories\SupportEloquentORM;
use App\Repositories\SupportRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            SupportRepositoryInterface::class,
            SupportEloquentORM::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    
    public function boot()
    {
        Builder::defaultStringLength(191);
    }
}
