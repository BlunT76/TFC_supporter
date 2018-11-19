<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SupportersTableSeeder::class);
        $this->call(TfcplayersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StorephotosTableSeeder::class);

    }
}
