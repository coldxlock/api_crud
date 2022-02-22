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

        Gate::define('users', function ($user) {
            return $user->hasPermission('users');
        });

        Gate::define('add_permissions_user', function ($user) {
            return $user->hasPermission('add_permissions_user');
        });

        Gate::define('deletar_permissao_usuario', function ($user) {
            return $user->hasPermission('deletar_permissao_usuario');
        });

        Gate::define('visualizar_categorias', function ($user) {
            return $user->hasPermission('visualizar_categorias');
        });

        Gate::define('visualizar_categoria', function ($user) {
            return $user->hasPermission('visualizar_categoria');
        });

        Gate::define('deletar_categoria', function ($user) {
            return $user->hasPermission('deletar_categoria');
        });

        Gate::define('editar_categoria', function ($user) {
            return $user->hasPermission('editar_categoria');
        });

        Gate::define('criar_categoria', function ($user) {
            return $user->hasPermission('criar_categoria');
        });


        Gate::before(function ($user) {
            if ($user->isSuperAdmin()) {
                return true;
            }
        });
    }
}
