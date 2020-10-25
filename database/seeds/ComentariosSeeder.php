<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\modelos\comentarios;
use Faker\Factory as Faker;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $i){
            DB::table('comentarios')->insert([
                'titulo'=>$faker->sentence(2),
                'cuerpo'=>$faker->text(150),
                'producto_id'=>$faker->numberBetween(1,20),
                'persona_id'=>$faker->numberBetween(1,20),
            ]);
        }
    }
}