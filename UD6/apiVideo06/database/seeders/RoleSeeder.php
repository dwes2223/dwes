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
        //con eloquent mejor, crear los timestap
        Role::create([
            'name' => 'registrado'
        ]);
        Role::create([
            'name' => 'usuario'
        ]);
        Role::create([
            'name' => 'administrador'
        ]);
        // //query builder (DB)
        // \DB::table('roles')->insert([
        //     'id' => '1',
        //     'name' => 'registrado'
        // ]);
        
        // \DB::table('roles')->insert([
        //     'id' => '2',
        //     'name' => 'usuario'
        // ]);
        
        // \DB::table('roles')->insert([
        //     'id' => '3',
        //     'name' => 'administrador'
        // ]);     
    }
}
