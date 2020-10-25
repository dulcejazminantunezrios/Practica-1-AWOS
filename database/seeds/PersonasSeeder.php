<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\modelos\personas;
use Faker\Factory as Faker;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach (range(1,20) as $i){
          DB::table('personas')->insert([	            
              'nombre' => $faker->name(),
              'apellido' => $faker->lastName(),
              'correo' => $faker->email(),
              'edad'=>$faker->randomNumber(2),
          ]);
        }
       // factory(personas::class, 99)->create();
    }
}
