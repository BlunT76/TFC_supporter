<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run() 
    {
        
        DB::table('users')->insert([
            'name' => 'adminTFC',
            'email'=> 'admin@tfc.fr',
            'password'=> bcrypt('tfc31'),
        ]);
    }
}