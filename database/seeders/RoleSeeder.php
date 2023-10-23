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

        $bouncer->ability()->firstOrCreate(['name' => '-index']);
        $bouncer->ability()->firstOrCreate(['name' => '-index']);
        $bouncer->ability()->firstOrCreate(['name' => '-index']);

        $bouncer->role()->firstOrCreate(['name' => '']);
        $bouncer->role()->firstOrCreate(['name' => '']);
        $bouncer->role()->firstOrCreate(['name' => '']);

        $bouncer->allow('admin')->to('salle-index');
        $bouncer->allow('user')->to('reserv-index');
        $bouncer->allow('user')->to('client-index');
    }
}
