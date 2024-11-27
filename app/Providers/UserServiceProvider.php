<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Doctrine\UserDoctrineRepository;

class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Escolha uma implementação:
        // $this->app->bind(UserRepositoryInterface::class, UserDoctrineRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    public function boot(): void
    {

    }
}
