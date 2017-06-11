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
            'title' => 'Texte',
            'icone' => 'glyphicon glyphicon-book',
        ]
        );


        DB::table('types')->insert(
        [
            'title' => 'Image',
            'icone' => 'glyphicon glyphicon-picture',
        ]
        );


        DB::table('types')->insert(
        [
            'title' => 'Texte & Image',
            'icone' => 'glyphicon glyphicon-playlist',
        ]
        );


        DB::table('types')->insert(
        [
            'title' => 'Texte<sup>^2</sup>',
            'icone' => 'glyphicon glyphicon-text-size',
        ]
        );


        DB::table('types')->insert(
        [
            'title' => 'Image<sup>^2</sup>',
            'icone' => 'glyphicon glyphicon-object-align-horizontal',
        ]
        );


        DB::table('types')->insert(
        [
            'title' => 'Texte & Image<sup>^2</sup>',
            'icone' => 'glyphicon glyphicon-th-large',
        ]
        );




    }
}
