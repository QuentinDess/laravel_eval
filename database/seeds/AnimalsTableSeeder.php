<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('animals')->insert([
            'name' => 'JoyBoy',
            'gender' => 'Male',
            'age' => '5',
            'size' => '35',
            'race_id' => '1',
           
        ]);
        DB::table('animals')->insert([
            'name' => 'Fluffy',
            'gender' => 'Female',
            'age' => '3',
            'size' => '65',
            'race_id' => '2',
           
        ]);
        DB::table('animals')->insert([
            'name' => 'Hedwige',
            'gender' => 'Male',
            'age' => '8',
            'size' => '55',
            'race_id' => '3',
           
        ]);
    }
}
