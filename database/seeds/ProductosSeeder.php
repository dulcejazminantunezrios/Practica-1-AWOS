<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $regis_p = range(0,20);
        foreach ($regis_p as $valor) {
          DB::table('productos')->insert([	            
              'nombre_p' => Str::random(25),
              'descripcion' => Str::random(30),
              'precio' => rand(1,1000),
          ]);
        }
    }
}
