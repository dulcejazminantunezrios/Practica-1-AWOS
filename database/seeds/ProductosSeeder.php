<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\modelos\productos;
use Faker\Factory as Faker;
use Faker\Provider\Base;
class ProductosSeeder extends Seeder
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
            DB::table('productos')->insert([
                'nombre_p'=>$faker-> sentence(3),
                'descripcion'=>$faker->text(50),
                'precio'=>$faker->randomFloat(2,0.00,999.99)
            ]);
        }
        //factory(productos::class, 99)->create();
    }
}
