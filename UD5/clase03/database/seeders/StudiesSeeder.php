<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Study;
use DB;

class StudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //con eloquent
        Study::create([
            'code' => 'IFC302',
            'name' => 'Desarrollo de Aplicaciones Multiplataforma',
            'abreviation' => 'DAM'
        ]);

        //lo mismo con query builder
        DB::table('studies')->insert([
            'code' => 'IFC303',
            'name' => 'Desarrollo de Aplicaciones Web',
            'abreviation' => 'DAW'
        ]);        
    }
}
