<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ColegiosTableSeeder::class);
        $this->call(ClasesTableSeeder::class);
        $this->call(EducacionsTableSeeder::class);
        $this->call(HijosTableSeeder::class);
        $this->call(TiposTableSeeder::class);
        $this->call(ActividadsTableSeeder::class);
        $this->call(ResponsablesTableSeeder::class);
        $this->call(ComedorsTableSeeder::class);
        $this->call(PatologiasTableSeeder::class);


    }
}
