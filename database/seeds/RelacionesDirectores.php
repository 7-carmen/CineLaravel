<?php

use Illuminate\Database\Seeder;

class RelacionesDirectores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'1',
            'movie_id'=>'1'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'2',
            'movie_id'=>'1'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'4',
            'movie_id'=>'2'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'55',
            'movie_id'=>'3'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'56',
            'movie_id'=>'3'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'57',
            'movie_id'=>'4'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'97',
            'movie_id'=>'5'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'98',
            'movie_id'=>'5'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'99',
            'movie_id'=>'6'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'111',
            'movie_id'=>'7'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'112',
            'movie_id'=>'8'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'123',
            'movie_id'=>'9'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'134',
            'movie_id'=>'10'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'148',
            'movie_id'=>'11'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'157',
            'movie_id'=>'12'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'166',
            'movie_id'=>'13'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'173',
            'movie_id'=>'14'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'185',
            'movie_id'=>'15'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'63',
            'movie_id'=>'16'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'217',
            'movie_id'=>'17'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'228',
            'movie_id'=>'18'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'243',
            'movie_id'=>'19'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'243',
            'movie_id'=>'20'
        ]);
        DB::table('people_dirigen_movies')->insert([
            'people_id'=>'3',
            'movie_id'=>'21'
        ]);
    }
}
