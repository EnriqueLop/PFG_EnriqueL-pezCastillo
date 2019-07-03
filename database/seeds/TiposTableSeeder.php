<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tipos')->insert([
          'name' => 'Excusión',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('tipos')->insert([
          'name' => 'Fotografía',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('tipos')->insert([
          'name' => 'Examen',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
    }
}
