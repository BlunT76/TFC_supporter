<?php

use Illuminate\Database\Seeder;

class BooleanbestplayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booleanbestplayers')->insert([
            'newbest' => false
        ]);
    }
}
