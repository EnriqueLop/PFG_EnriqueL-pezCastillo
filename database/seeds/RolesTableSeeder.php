<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
          'tipo_usuario' => 'admin',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('roles')->insert([
          'tipo_usuario' => 'director',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('roles')->insert([
          'tipo_usuario' => 'profesor',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('roles')->insert([
          'tipo_usuario' => 'tutor',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
      DB::table('roles')->insert([
          'tipo_usuario' => 'comedor',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);
    }
}
