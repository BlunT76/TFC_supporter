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
        factory(App\Tfcplayer::class, 30)->create();
    }
}
