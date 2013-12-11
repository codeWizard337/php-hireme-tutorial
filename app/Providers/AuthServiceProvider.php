<?php

namespace App\Providers;

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

        Gate::define('admin', 'App\Policies\UserPolicy@admin');
        Gate::define('recruiter', 'App\Policies\UserPolicy@recruiter');
        Gate::define('user', 'App\Policies\UserPolicy@user');

        Gate::define('owner', 'App\Policies\UserPolicy@owner');
    }
}
