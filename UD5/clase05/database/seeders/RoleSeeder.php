<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \DB::table('roles')->insert([
            'id' => '1',
            'name' => 'registrado'
        ]);
        
        \DB::table('roles')->insert([
            'id' => '2',
            'name' => 'usuario'
        ]);
        
        \DB::table('roles')->insert([
            'id' => '3',
            'name' => 'administrador'
        ]);
        
    }
}
