<?php

use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regis_c = range(0,20);
        foreach ($regis_c as $valor) {
          DB::table('comentarios')->insert([	            
              'titulo' => Str::random(10),
              'cuerpo' => Str::random(100),
              'producto_id' => rand(1,20),
              'persona_id' => rand(1,20),
          ]);
        }
    }
}
