<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bouncer = app(Bouncer::class);

        $bouncer->ability()->firstOrCreate(['name' => 'ordinateur-index']);
        $bouncer->ability()->firstOrCreate(['name' => 'serveur-index']);
        $bouncer->ability()->firstOrCreate(['name' => 'reseau-index']);

        $bouncer->role()->firstOrCreate(['name' => 'technicien']);
        $bouncer->role()->firstOrCreate(['name' => 'administrateur']);
        //$bouncer->role()->firstOrCreate(['name' => 'Utilisateur']);

        $bouncer->allow('technicien')->to('ordinateur-index');
        $bouncer->allow('technicien')->to('serveur-index');
        $bouncer->allow('administrateur')->to('reseau-index');
    }
}
