<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //con DB
        \DB::table('users')->insert([
            'id' => '1',
            'name' => 'registrado',
            'email' => 'registrado@dws.es',
            'password' => bcrypt('secret')
        ]);
    
        \DB::table('users')->insert([
            'id' => '2',
            'name' => 'usuario',
            'email' => 'usuario@dws.es',
            'password' => bcrypt('secret'),
            'role_id' => 2
        ]);
    
        \DB::table('users')->insert([
            'id' => '3',
            'name' => 'admin',
            'email' => 'admin@dws.es',
            'password' => bcrypt('secret'),
            'role_id' => 3
        ]);

        User::factory()
        ->count(100)
        ->create();    
    }
}
