<?php

use Illuminate\Database\Seeder;

class trophiesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('trophies')->insert(
        [
            'name' => 'welcome',
            'points' => '5',
            'description' => 'trophée de bienvenu',
        ]
        );



        DB::table('trophies')->insert(
        [
            'name' => 'InfoProfil',
            'points' => '10',
            'description' => 'Les information de USER sont completes',
        ]
        );

        DB::table('trophies')->insert(
        [
            'name' => 'FistPublication',
            'points' => '10',
            'description' => 'User a publié sa premiere publication dans la platforme ',
        ]
        );


    }
}
