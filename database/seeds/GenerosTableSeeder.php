<?php

use App\genero;
use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        genero::truncate();
        DB::table('generos')->insert([
            'nombre'=>'Animación'
        ]);
        DB::table('generos')->insert([
            'nombre'=>'Thriller'
        ]);
        DB::table('generos')->insert([
            'nombre'=>'Intriga'
        ]);
        DB::table('generos')->insert([
            'nombre'=>'Drama'
        ]);
        DB::table('generos')->insert([
            'nombre'=>'Romance'
        ]);
        DB::table('generos')->insert([
            'nombre'=>'Comedia'
        ]);
        DB::table('generos')->insert([
            'nombre'=>'Fantástico'
        ]);
    }
}