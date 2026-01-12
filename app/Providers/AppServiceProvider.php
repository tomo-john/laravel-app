<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Post;

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
        Gate::define('test', function (User $user) {
            if($user->id === 1) {
                return true;
            }
            return false;
        });

        Gate::define('update-post', function(User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('delete-post', function(User $user, Post $post) {
            return $user->id === $post->user_id || $user->role === 'admin';
        });
    }
}
