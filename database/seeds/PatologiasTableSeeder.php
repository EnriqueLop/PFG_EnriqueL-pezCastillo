<?php

use Illuminate\Database\Seeder;

class PatologiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('patologias')->insert([
          'name' => 'Ninguna',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('patologias')->insert([
          'name' => 'Diabetes',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('patologias')->insert([
          'name' => 'Celiaquía',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('patologias')->insert([
          'name' => 'Intolerante a la lactosa',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('patologias')->insert([
          'name' => 'Alergico al pescado',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

    }
}
