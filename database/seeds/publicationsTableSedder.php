<?php

use Illuminate\Database\Seeder;
class publicationsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('publications')->insert(
        [
            'title' => 'Help me :agadir ou esaouira',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 1,  
            'text1' => 'text test',
            'status' => 0 
        ]
        );


        DB::table('publications')->insert(
        [
            'title' => 'Help me :agadir ou esaouira',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 3,  
            'text1' => 'text test 1',
            'text2' => 'text test 2',
            'status' => 0 
        ]
        );


        DB::table('publications')->insert(
        [
            'title' => 'Help me :agadir ou esaouira',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 3,  
            'text1' => 'text test 1',
            'text2' => 'text test 2',
            'status' => 0 
        ]
        );


        DB::table('publications')->insert(
        [
            'title' => 'Help me :agadir ou esaouira',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 4,  
            'text1' => 'text test 1',
            'text2' => 'text test 2',
            'status' => 0 
        ]
        );




         DB::table('publications')->insert(
        [
            'title' => 'Help me :agadir ou esaouira',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 5,  
            'text1' => 'text test 1',
            'text2' => 'text test 2',
            'status' => 0 
        ]
        );
        

        DB::table('publications')->insert(
        [
            'title' => 'Help me :agadir ou esaouira',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 6,  
            'text1' => 'text test 1',
            'text2' => 'text test 2',
            'status' => 0 
        ]
        );


    }
}
