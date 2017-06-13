<?php

use Illuminate\Database\Seeder;

class opinionsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 1,
        ]
        );


        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 2,
        ]
        );


        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 1,
            'idPublication' => 3,
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 2,
            'idPublication' => 3,
        ]
        );


        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 3,
        ]
        );


    }



}
