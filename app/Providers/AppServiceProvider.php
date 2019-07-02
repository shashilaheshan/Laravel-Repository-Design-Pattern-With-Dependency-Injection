<?php

namespace App\Providers;

use App\Repositories\Todo\EloquentTodo;
use App\Repositories\Todo\TodoRepository;
use App\Repositories\User\EloquentUser;
use App\Repositories\User\UserRepository;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        Schema::defaultStringLength(191);
        $this->app->singleton(UserRepository::class,EloquentUser::class);
        $this->app->singleton(TodoRepository::class,EloquentTodo::class);
    }
}
