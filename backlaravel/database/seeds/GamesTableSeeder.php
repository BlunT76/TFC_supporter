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
            'day'=> "2018-11-19"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'TFC',
            'visitor'=> 'OL',
            'day'=> "2018-10-19"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'LOSC',
            'visitor'=> 'TFC',
            'day'=> "2018-12-19"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'PSG',
            'visitor'=> 'TFC',
            'day'=> "2018-12-05"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'TFC',
            'visitor'=> 'ASSE',
            'day'=> "2019-11-19"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'TFC',
            'visitor'=> 'OM',
            'day'=> "2019-10-19"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'EAG',
            'visitor'=> 'TFC',
            'day'=> "2019-12-19"
        ]);

        DB::table('games')->insert([
            'hometeam' => 'FCNantes',
            'visitor'=> 'TFC',
            'day'=> "2019-12-05"
        ]);
    }
}