<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //con eloquent
        Role::create([
            'name' => 'registrado'
        ]);
        Role::create([
            'name' => 'usuario'
        ]);
        Role::create([
            'name' => 'administrador'
        ]);
    }
}
