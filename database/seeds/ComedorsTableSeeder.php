<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class ComedorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comedors')->insert([
          'hijo_id' => '1',
          'patologia_id' => Crypt::encryptString('1'),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

      DB::table('comedors')->insert([
          'hijo_id' => '1',
          'patologia_id' => Crypt::encryptString('2'),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
      ]);

    }
}
