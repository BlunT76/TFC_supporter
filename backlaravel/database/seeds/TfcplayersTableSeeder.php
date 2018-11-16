<?php

use Illuminate\Database\Seeder;

class TfcplayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Tfcplayer::class, 30)->create();
        DB::table('tfcplayers')->insert([
            'firstname' => 'Marc',
            'lastname'=> 'Vidal',
            'portrait'=> 'http://www.tfc.info/sites/default/files/vidal_trombi_2.jpg',
            'number'=> 16,
            'position'=> 'Gardien',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Mauro',
            'lastname'=> 'Goicoechea',
            'portrait'=> 'http://www.tfc.info/sites/default/files/goicoechea_trombi_2.jpg',
            'number'=> 1,
            'position'=> 'Gardien',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Baptiste',
            'lastname'=> 'Reynet',
            'portrait'=> 'http://www.tfc.info/sites/default/files/reynet_mercato_stadium.jpg',
            'number'=> 30,
            'position'=> 'Gardien',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'François',
            'lastname'=> 'Moubandje',
            'portrait'=> 'http://www.tfc.info/sites/default/files/moubandje_trombi_6.jpg',
            'number'=> 29,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Steeve',
            'lastname'=> 'Yago',
            'portrait'=> 'http://www.tfc.info/sites/default/files/yago_trombi_9.jpg',
            'number'=> 20,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Issiaga',
            'lastname'=> 'Sylla',
            'portrait'=> 'http://www.tfc.info/sites/default/files/sylla_trombi_3.jpg',
            'number'=> 12,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Christopher',
            'lastname'=> 'Jullien',
            'portrait'=> 'http://www.tfc.info/sites/default/files/jullien_trombi_4.jpg',
            'number'=> 6,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Kelvin',
            'lastname'=> 'Amian',
            'portrait'=> 'http://www.tfc.info/sites/default/files/amian_trombi_1.jpg',
            'number'=> 2,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Steven',
            'lastname'=> 'Fortes',
            'portrait'=> 'http://www.tfc.info/sites/default/files/fortes_trombi_0.jpg',
            'number'=> 18,
            'position'=> 'Défenseur',
        ]);


        DB::table('tfcplayers')->insert([
            'firstname' => 'Steven',
            'lastname'=> 'Moreira',
            'portrait'=> 'http://www.tfc.info/sites/default/files/moreira_stadium_mercato.jpg',
            'number'=> 5,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Stéphane',
            'lastname'=> 'M\'bia',
            'portrait'=> 'http://www.tfc.info/sites/default/files/mbia_stadium_signature.jpg',
            'number'=> 25,
            'position'=> 'Défenseur',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Yann',
            'lastname'=> 'Bodiger',
            'portrait'=> 'http://www.tfc.info/sites/default/files/bodiger_trombi_2.jpg' ,
            'number'=> 23,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Ibrahim',
            'lastname'=> 'Sangare',
            'portrait'=> 'http://www.tfc.info/sites/default/files/sangare_trombi_2.jpg',
            'number'=> 17,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Jimmy',
            'lastname'=> 'Durmaz',
            'portrait'=> 'http://www.tfc.info/sites/default/files/durmaz_trombi_0.jpg',
            'number'=> 21,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Yannick',
            'lastname'=> 'Cahuzac',
            'portrait'=> 'http://www.tfc.info/sites/default/files/cahuzac_trombi_0.jpg',
            'number'=> 4,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'John',
            'lastname'=> 'Bostock',
            'portrait'=> 'http://www.tfc.info/sites/default/files/bostock_mercato_stadium.jpg',
            'number'=> 15,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Manuel',
            'lastname'=> 'Garcia',
            'portrait'=> 'http://www.tfc.info/sites/default/files/garcia_mercato_stadium.jpg',
            'number'=> 22,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Mathieu',
            'lastname'=> 'Dossevi',
            'portrait'=> 'http://www.tfc.info/sites/default/files/dossevi_signature_stadium_maillot.jpg',
            'number'=> 14,
            'position'=> 'Milieu',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Corentin',
            'lastname'=> 'Jean',
            'portrait'=> 'http://www.tfc.info/sites/default/files/jean_trombi_2.jpg',
            'number'=> 8,
            'position'=> 'Attaquant',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Yaya',
            'lastname'=> 'Sanogo',
            'portrait'=> 'http://www.tfc.info/sites/default/files/sanogo_trombi_0.jpg',
            'number'=> 9,
            'position'=> 'Attaquant',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Max-Alain',
            'lastname'=> 'Gradel',
            'portrait'=> 'http://www.tfc.info/sites/default/files/gradel_trombi.jpg',
            'number'=> 7,
            'position'=> 'Attaquant',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Firmin',
            'lastname'=> 'Mubele',
            'portrait'=> 'http://www.tfc.info/sites/default/files/mubele_signature.jpg',
            'number'=> 24,
            'position'=> 'Attaquant',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Aaron',
            'lastname'=> 'Leya Iseka',
            'portrait'=> 'http://www.tfc.info/sites/default/files/leyaiseka_mercato_stadium.jpg',
            'number'=> 10,
            'position'=> 'Attaquant',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Derick',
            'lastname'=> 'Oseï Yaw',
            'portrait'=> 'http://www.tfc.info/sites/default/files/oseiyaw_amical_ajaccio.jpg',
            'number'=> 31,
            'position'=> 'Attaquant',
        ]);

        DB::table('tfcplayers')->insert([
            'firstname' => 'Hakim',
            'lastname'=> 'El Mokeddem',
            'portrait'=> 'http://www.tfc.info/sites/default/files/elmokeddem_amical_redstar_grosplan.jpg',
            'number'=> 28,
            'position'=> 'Attaquant',
        ]);

    }
}
