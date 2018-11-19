<?php

use Illuminate\Database\Seeder;

class StorephotosTableSeeder extends Seeder
{
    public function run(){
        DB::table('storephotos')->insert([
            'supporter_id' => 1,
            'game_id' => 1,
            'url' => "http://sf2.sport365.fr/wp-content/uploads/se/2017/09/toulouse-750x410.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 4,
            'game_id' => 1,
            'url' => "http://www.slate.fr/sites/default/files/styles/1060x523/public/000_zd1gz.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 11,
            'game_id' => 1,
            'url' => "http://www.au-premier-poteau.fr/wp-content/uploads/2015/08/supporters-tfc.png",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 7,
            'game_id' => 1,
            'url' => "https://img.bfmtv.com/i/0/0/b01/fdffa8b5b1e1b61aef086b563c01c.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 8,
            'game_id' => 1,
            'url' => "https://i1.wp.com/www.le24heures.fr/wp-content/uploads/2017/01/IMG_20161029_164712.jpg?resize=1000%2C640&ssl=1",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 14,
            'game_id' => 1,
            'url' => "http://www.tfc.info/sites/default/files/supps.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 18,
            'game_id' => 1,
            'url' => "http://www.tfc.info/sites/default/files/image7018590_zoom.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 10,
            'game_id' => 1,
            'url' => "https://static.actu.fr/uploads/2018/03/27798000_10155978608824000_5628683610161213098_o-854x569.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 3,
            'game_id' => 1,
            'url' => "https://static.actu.fr/uploads/2017/08/supporters-tfc-854x569.jpg",
        ]);

        DB::table('storephotos')->insert([
            'supporter_id' => 12,
            'game_id' => 1,
            'url' => "http://www.tfc.info/sites/default/files/supporters_paris_tifo_1.jpg",
        ]);
    }
}