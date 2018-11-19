<?php

use Illuminate\Database\Seeder;

class SupportersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Supporter::class, 20)->create();
    }
}
