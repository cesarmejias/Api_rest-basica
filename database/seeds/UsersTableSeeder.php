<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Primero limpiemos la tabla de usuarios
         User::truncate();

         $faker = \Faker\Factory::create();

         User::create([
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'password' => '12345',
         ]);

         // Y ahora generemos algunas docenas de usuarios para nuestra aplicación:
         for ($i = 0; $i < 10; $i++) {
             User::create([
                 'name' => $faker->name,
                 'email' => $faker->email,
                 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
             ]);
         }
    }
}
