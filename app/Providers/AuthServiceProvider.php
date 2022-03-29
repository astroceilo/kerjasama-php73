<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function(User $user){
            return $user->level == 'admin';
        });

        Gate::define('pimpinan', function(User $user){
            return $user->level == 'pimpinan';
        });

        Gate::define('staff', function(User $user){
            return $user->level == 'staff';
        });

        Gate::define('user', function(User $user){
            return $user->level == 'user';
        });
    }
}
