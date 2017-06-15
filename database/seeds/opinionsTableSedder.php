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
            'idUser' => 1,
            'choice' => 1,
            'idPublication' => 1,
        ]
        );




    }
}
