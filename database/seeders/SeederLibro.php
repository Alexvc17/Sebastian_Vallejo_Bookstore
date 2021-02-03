<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederLibro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([

            'ISBN' => '00982', 
            'titulo' => 'Cien años de soledad', 
            'precio' => 80000,
            'stock' => 100,
            'editorial' => '1',
        
        ]);

        DB::table('libro')->insert([

            'ISBN' => '12345', 
            'titulo' => '¿Quien se ha sellado mi queso?', 
            'precio' => 25000,
            'stock' => 5,
            'editorial' => '3',
        
        ]);

        DB::table('libro')->insert([

            'ISBN' => '9888', 
            'titulo' => 'El Anillo', 
            'precio' => 12000,
            'stock' => 20,
            'editorial' => '1',
        
        ]);

        DB::table('libro')->insert([

            'ISBN' => '966', 
            'titulo' => 'Software III', 
            'precio' => 12000,
            'stock' => 0,
            'editorial' => '4',
        
        ]);

        DB::table('libro')->insert([

            'ISBN' => '52874', 
            'titulo' => 'Cambiemos de via', 
            'precio' => 20000,
            'stock' => 5,
            'editorial' => '4',
        
        ]);

        DB::table('libro')->insert([

            'ISBN' => '6446', 
            'titulo' => 'Mi vida y el palacio', 
            'precio' => 49000,
            'stock' => 50,
            'editorial' => '5',
        
        ]);
    }
}
