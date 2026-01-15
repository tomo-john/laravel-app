<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // test
        Gate::define('test', function (User $user) {
            if($user->id === 1) {
                return true;
            }
            return false;
        });

        // postの編集・削除
        Gate::define('update-post', function(User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('delete-post', function(User $user, Post $post) {
            return $user->id === $post->user_id || $user->role === 'admin';
        });

        // UserList
        Gate::define('admin', function (User $user) {
            if ($user->role === 'admin') {
                return true;
            }
        });
    }
}
