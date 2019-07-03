<?php

use Illuminate\Database\Seeder;

class EducacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('educacions')->insert([
          'id' => '1',
          'name' => 'Infantil',
          'nameEntero' => 'Educación Infantil',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('educacions')->insert([
          'id' => '2',
          'name' => 'Primaria',
          'nameEntero' => 'Educación Primaria Obligatoria',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('educacions')->insert([
          'id' => '3',
          'name' => 'Secundaria',
          'nameEntero' => 'Educación Secundaria Obligatoria',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('educacions')->insert([
          'id' => '4',
          'name' => 'Bachillerato',
          'nameEntero' => 'Educación Superior (Bachiller)',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
    }
}
