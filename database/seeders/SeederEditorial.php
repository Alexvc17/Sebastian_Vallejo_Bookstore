<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederEditorial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('editorial')->insert([

            'nombre' => 'Norma', 
            'direccion' => 'Av. El Dorado 90-10', 
            'ciudad' => 'Bogota',
            'telefono' => '426652',
        
        ]);

        DB::table('editorial')->insert([

            'nombre' => 'Mc Graw Hill', 
            'direccion' => 'Carrera 85 k #46a66', 
            'ciudad' => 'Bogota',
            'telefono' => '3102266',
        
        ]);

        DB::table('editorial')->insert([

            'nombre' => 'Alfaomega Colombiana', 
            'direccion' => 'Cl. 62 ##2046', 
            'ciudad' => 'Bogota',
            'telefono' => '485210',
        
        ]);

        DB::table('editorial')->insert([

            'nombre' => 'Los Tres Editores S.A.S.', 
            'direccion' => 'Cl. 32 ##8a-95', 
            'ciudad' => 'Cali',
            'telefono' => '125520',
        
        ]);

        DB::table('editorial')->insert([

            'nombre' => 'La Santillana', 
            'direccion' => 'Cra. 82 #11241 N 33AA', 
            'ciudad' => 'Medellin',
            'telefono' => '700022',
        
        ]);

        DB::table('editorial')->insert([

            'nombre' => 'Editoriales la esquina', 
            'direccion' => 'Cra. 6 #22', 
            'ciudad' => 'Pasto',
            'telefono' => '311002',
        
        ]);




    }
}
