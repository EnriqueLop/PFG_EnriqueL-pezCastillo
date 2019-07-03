<?php

use Illuminate\Database\Seeder;

class ClasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('clases')->insert([
          'curso' => '1',
          'letra' => 'A',
          'codigo' => '111',
          'educacion_id' => '1',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('clases')->insert([
          'curso' => '1',
          'letra' => 'B',
          'codigo' => '222',
          'colegio_id' => '1',
          'educacion_id' => '2',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('clases')->insert([
          'curso' => '1',
          'letra' => 'C',
          'educacion_id' => '2',
          'colegio_id' => '1',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
    }
}
