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
        //con eloquent
        User::create([
            'name' => 'registrado',
            'email' => 'registrado@dws.es',
            'password' => bcrypt('secret')
        ]);
        User::create([
            'name' => 'usuario',
            'email' => 'usuario@dws.es',
            'password' => bcrypt('secret'),
            'role_id' => 2
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@dws.es',
            'password' => bcrypt('secret'),
            'role_id' => 3
        ]);
    }
}
