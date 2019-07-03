<?php

use Illuminate\Database\Seeder;

class ResponsablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('responsables')->insert([
          'name' => 'Colegio Cardenal López de Mendoza',
          'identificacion' => '725A89D',
          'direccion' => 'Avenida de los Naranjos 5',
          'telefono' => '947256842',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

    }
}
