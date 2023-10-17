<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        Role::create(['name' => 'technicien']);
        Role::create(['name' => 'administrateur']);

        Permission::create(['name' =>'gère les ordinateurs']);
        Permission::create(['name' =>'gère les serveurs']);
        Permission::create(['name' =>'gère les reseaux']);

        $roleTecniciens = Role::findByName('technicien');
        $roleTecniciens = givePermissionTo(['gère les ordinateurs','gère les serveurs']);

        $roleAdmin = Role::findByName('administrateur');
        $roleTecniciens = givePermissionTo('gère les reseaux');

        // Pour donnée une role :
        $user = User::find(1);
        $user->assignRole('technicien');


    }
}
