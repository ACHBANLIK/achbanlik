<?php

use Illuminate\Database\Seeder;

class utrophiesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('utrophies')->insert(
        [
            'idUser' => 2,
            'idTrophy' => 1,
        ]
        );


        DB::table('utrophies')->insert(
        [
            'idUser' => 2,
            'idTrophy' => 2,
        ]
        );


    }
}
