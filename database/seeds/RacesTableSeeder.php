<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => 'Cat',
            'classification' => 'mammifere',
            'life' => '17',
           
           
        ]);
        DB::table('races')->insert([
            'name' => 'Dog',
            'classification' => 'mammifere',
            'life' => '10',
           
           
        ]);
        DB::table('races')->insert([
            'name' => 'Owl',
            'classification' => 'Oiseaux',
            'life' => '15',
           
        ]);
    }
}
