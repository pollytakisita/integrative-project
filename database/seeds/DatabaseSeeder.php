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
        $this->call(UsersTableSeeder::class);
        $this->call(OngsTableSeeder::class);
        $this->call(SegmentsTableSeeder::class);
        $this->call(OngHasUserTableSeeder::class);
        $this->call(ActionEventTableSeeder::class);
        $this->call(ActionEventHasUserTableSeeder::class);

    }
}
