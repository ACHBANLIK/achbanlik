<?php

use Illuminate\Database\Seeder;
class typesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        
    {



        DB::table('types')->insert(
        [
            'title_fr' => 'Texte',
            'title_en' => 'Texte',
            'icone' => 'glyphicon glyphicon-book',
        ]
        );


        DB::table('types')->insert(
        [
            'title_fr' => 'Image',
            'title_en' => 'Image',
            'icone' => 'glyphicon glyphicon-picture',
        ]
        );


        DB::table('types')->insert(
        [
            'title_fr' => 'Texte et Image',
            'title_en' => 'Texte and Image',
            'icone' => 'glyphicon glyphicon-playlist',
        ]
        );


        DB::table('types')->insert(
        [
            'title_fr' => '2 * Texte',
            'title_en' => '2 * Texte',
            'icone' => 'glyphicon glyphicon-text-size',
        ]
        );


        DB::table('types')->insert(
        [
            'title_fr' => '2 * Image',
            'title_en' => '2 * Image',
            'icone' => 'glyphicon glyphicon-object-align-horizontal',
        ]
        );


        DB::table('types')->insert(
        [
            'title_fr' => '2 * Texte et Image',
            'title_en' => '2 * Texte and  Image',
            'icone' => 'glyphicon glyphicon-th-large',
        ]
        );




    }
}
