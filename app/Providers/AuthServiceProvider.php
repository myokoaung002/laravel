<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;



class AuthServiceProvider extends ServiceProvider
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
        /*
        $this->registerPolices();
        Gate::define('comment-delete', function ($user, $comment){
            return $user->id == $comment->user_id;
        });
        */
    }
}
