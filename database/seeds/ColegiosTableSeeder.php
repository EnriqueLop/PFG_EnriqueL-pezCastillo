<?php

use Illuminate\Database\Seeder;

class ColegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colegios')->insert([
          'name' => 'SAFA',
          'codigo' => '123',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('colegios')->insert([
          'name' => 'Mendoza',
          'codigo' => '000',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
    }
}
