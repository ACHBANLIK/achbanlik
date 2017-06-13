<?php

use Illuminate\Database\Seeder;
class commentsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        
    {



        DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 1,
            'text' => 'mon commentaire 1',
        ]
        );



        DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 1,
            'text' => 'mon commentaire 2',
        ]
        );


        DB::table('comments')->insert(
        [
            'idUser' => 3,
            'idPublication' => 1,
            'text' => 'mon commentaire 3',
        ]
        );



        DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 2,
            'text' => 'mon commentaire 1',
        ]
        );



        DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 3,
            'text' => 'mon commentaire 2',
        ]
        );


        DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 4,
            'text' => 'mon commentaire 3',
        ]
        );
    }
}
