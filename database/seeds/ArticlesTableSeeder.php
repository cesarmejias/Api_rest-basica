<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Trunquemos nuestros registros existentes para empezar desde cero.
         Article::truncate();

         $faker = \Faker\Factory::create();

         // Y ahora, creemos algunos artículos en nuestra base de datos:
         for ($i = 0; $i < 10; $i++) {
             Article::create([
                 'titulo' => $faker->sentence,
                 'mensaje' => $faker->paragraph,
             ]);
         }
    }
}
