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
        'name' => 'admin',
        'role_id' => '2',
        'email' => 'admin@admin',
        'password' => bcrypt('012345678'),
        
        ]);
        DB::table('users')->insert([
        'name' => 'notadmin',
        'role_id' => '2',
        'email' => 'notadmin@admin',
        'password' => bcrypt('012345678'),
        
        ]);
    }
}
