<?php

use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regis_per = range(0,20);
        foreach ($regis_per as $valor) {
          DB::table('personas')->insert([	            
              'nombre' => Str::random(8),
              'apellido' => Str::random(12),
              'correo' => Str::random(15).'@gmail.com',
              'edad'=>rand(1,99),
          ]);
        }
    }
}
