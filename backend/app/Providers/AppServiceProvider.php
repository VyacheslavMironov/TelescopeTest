<?php

namespace App\Providers;

use App\Domain\Interfaces\UserRepositoryInterface;
use App\Domain\Interfaces\VerificationCodeRepositoryInterface;
use App\Http\Resources\VerificationCodeResource;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(VerificationCodeRepositoryInterface::class, VerificationCodeResource::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
