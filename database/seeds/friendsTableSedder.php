<?php

use Illuminate\Database\Seeder;

class friendsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{


   		DB::table('friends')->insert(
        [
            'idUser1' => 3,
            'idUser2' => 1,
            'status' => 1,
            'idUserAction' =>1,
        ]
        );

        DB::table('friends')->insert(
        [
            'idUser1' => 3,
            'idUser2' => 2,
            'status' => 1,
            'idUserAction' =>2,
        ]
        );

        DB::table('friends')->insert(
        [
            'idUser1' => 5,
            'idUser2' => 3,
            'status' => 1,
            'idUserAction' =>3,
        ]
        );
        
        DB::table('friends')->insert(
        [
            'idUser1' => 4,
            'idUser2' => 18,
            'status' => 1,
            'idUserAction' =>4,
        ]
        );
        


    }
}
