<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('manage_employee', function (User $user) {
            return $user->role_id == 1;
        });
        Gate::define('manage_users', function (User $user) {
            return $user->role_id == 2;
        });
        Gate::define('users_view', function (User $user) {
            return $user->role_id == 3;
        });
    }
}
