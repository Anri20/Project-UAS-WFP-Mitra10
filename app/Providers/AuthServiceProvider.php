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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-product', function (User $user) {
            return $user->isOwner() || $user->isStaff();
        });

        Gate::define('manage-category', function (User $user) {
            return $user->isOwner() || $user->isStaff();
        });

        Gate::define('manage-brand', function (User $user) {
            return $user->isOwner() || $user->isStaff();
        });

        Gate::define('manage-customer', function (User $user) {
            return $user->isOwner() || $user->isStaff();
        });

        Gate::define('manage-transaction', function (User $user) {
            return $user->isOwner() || $user->isStaff();
        });
    }
}
