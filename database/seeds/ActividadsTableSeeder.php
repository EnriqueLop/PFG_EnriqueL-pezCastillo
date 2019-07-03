<?php

use Illuminate\Database\Seeder;

class ActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('actividads')->insert([
          'tipo_id' => '1',
          'clase_id' => '2',
          'fecha' => now(),
          'empresa' => 'empresa',
          'lugar' => 'lugar',
          'ciudad' => 'ciudad',
          'descripcion' => 'descripcion',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('actividads')->insert([
          'tipo_id' => '2',
          'clase_id' => '1',
          'fecha' => now(),
          'empresa' => 'empresa',
          'lugar' => 'lugar',
          'ciudad' => 'ciudad',
          'descripcion' => 'descripcion',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('actividads')->insert([
          'tipo_id' => '2',
          'clase_id' => '3',
          'fecha' => now(),
          'empresa' => 'empresa',
          'lugar' => 'lugar',
          'ciudad' => 'ciudad',
          'descripcion' => 'descripcion',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
    }
}
