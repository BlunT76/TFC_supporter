<?php

use Illuminate\Database\Seeder;

class TopphotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topphotos')->insert([
            'supporter_id' => 1 ,
            'game_id' => 1 ,
            'url' => 'https://photos2.tf1.fr/660/370/football-matchs-equipe-de-france-voir-resume-russie-france-1-af70fe-0@1x.jpg' 
        ]);

        DB::table('topphotos')->insert([
            'supporter_id' => 1 ,
            'game_id' => 1 ,
            'url' => 'http://www.slate.fr/sites/default/files/styles/1060x523/public/klosebutbresil.jpg' 
        ]);

        DB::table('topphotos')->insert([
            'supporter_id' => 1 ,
            'game_id' => 1 ,
            'url' => 'https://photos2.tf1.fr/660/370/football-matchs-equipe-de-france-voir-buts-match-france-colombie-cec744-0@1x.jpg'
        ]);

        DB::table('topphotos')->insert([
            'supporter_id' => 1 ,
            'game_id' => 2 ,
            'url' => 'https://photos2.tf1.fr/660/370/football-matchs-equipe-de-france-voir-resume-russie-france-1-af70fe-0@1x.jpg' 
        ]);

        DB::table('topphotos')->insert([
            'supporter_id' => 1 ,
            'game_id' => 2 ,
            'url' => 'https://photos2.tf1.fr/660/370/football-matchs-equipe-de-france-voir-buts-match-france-colombie-cec744-0@1x.jpg'
        ]);
        
        DB::table('topphotos')->insert([
            'supporter_id' => 1 ,
            'game_id' => 2 ,
            'url' => 'http://www.slate.fr/sites/default/files/styles/1060x523/public/klosebutbresil.jpg'
        ]);
    }
}

