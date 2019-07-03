<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@gmail.com',
          'role_id' => '1',
          'password' => bcrypt('password'),
          'enviar_correo' => true,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('users')->insert([
          'name' => 'Director',
          'email' => 'director@gmail.com',
          'role_id' => '2',
          'colegio_id' => '1',
          'password' => bcrypt('password'),
          'enviar_correo' => true,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('users')->insert([
          'name' => 'Profesor',
          'email' => 'profesor@gmail.com',
          'role_id' => '3',
          'password' => bcrypt('password'),
          'enviar_correo' => true,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

            DB::table('users')->insert([
                'name' => 'Tutor',
                'email' => 'tutor@gmail.com',
                'role_id' => '4',
                'password' => bcrypt('password'),
                'enviar_correo' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);

            DB::table('users')->insert([
                'name' => 'Profesora',
                'email' => 'profesora@gmail.com',
                'role_id' => '3',
                'clase_id' => '3',
                'password' => bcrypt('password'),
                'enviar_correo' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);

            DB::table('users')->insert([
                'name' => 'Comedor',
                'email' => 'comedor@gmail.com',
                'role_id' => '5',
                'colegio_id' => '1',
                'password' => bcrypt('password'),
                'enviar_correo' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
