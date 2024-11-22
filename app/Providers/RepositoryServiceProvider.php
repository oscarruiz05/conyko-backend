<?php

namespace App\Providers;

use App\Repositories\Eloquent\TareaRepository;
use App\Repositories\Interface\TareaRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            TareaRepositoryInterface::class,
            TareaRepository::class
        );
    }
}
