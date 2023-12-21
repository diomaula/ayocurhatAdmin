<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // $this->registerPolicies();
        // Gate::define('isAdmin', function($user) {
        //    return $user->role == 'admin';
        // });
        // Gate::define('isEditor', function($user) {
        //     return $user->role == 'manager';
        // });
        // Gate::define('isAuthor', function($user) {
        //     return $user->role == 'user';
        // });
        // Gate::define('update-post', function ($user, $post) {
        //     return $user->id === $post->user_id;
        // });
    }
}
