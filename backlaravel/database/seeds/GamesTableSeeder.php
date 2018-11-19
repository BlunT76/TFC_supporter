<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'hometeam' => 'TFC',
            'visitor'=> 'PSG',
            'day'=> new DateTime(),
            'season' => '2018/2019'
        ]);

        DB::table('games')->insert([
            'hometeam' => 'TFC',
            'visitor'=> 'OM',
            'day'=> new DateTime(),
            'season' => '2018/2019'
        ]);

        DB::table('games')->insert([
            'hometeam' => 'TFC',
            'visitor'=> 'EAG',
            'day'=> new DateTime(),
            'season' => '2018/2019'
        ]);
    }
}