<?php

use Illuminate\Database\Seeder;

class HijosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('hijos')->insert([
          'name' => 'Hijo1',
          'user_id' => '4',
          'clase_id' => '3',
          'comedor' => true,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('hijos')->insert([
          'name' => 'Hijo2',
          'user_id' => '4',
          'clase_id' => '2',
          'comedor'=>true,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('hijos')->insert([
          'name' => 'Hijo3',
          'user_id' => '3',
          'clase_id' => '3',
          'comedor' => false,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

    }
}
