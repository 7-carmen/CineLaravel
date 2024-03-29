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
        $this->call(MoviesTableSeeder::class);
        $this->call(GenerosTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(RelacionesActores::class);
        $this->call(RelacionesDirectores::class);
        $this->call(RelacionesGeneros::class);
    }
}
