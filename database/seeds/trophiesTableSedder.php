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
            'points' => '2',
            'description' => 'User a publié sa premiere publication dans la platforme ',
        ]
        );

        DB::table('trophies')->insert(
        [
            'name' => '100 Pulications ',
            'points' => '2',
            'description' => 'Depassement de 100 publications par l user',
        ]
        );


        DB::table('trophies')->insert(
        [
            'name' => '50 Votes ',
            'points' => '3',
            'description' => 'Depassement de 50  votes par l user',
        ]
        );

        DB::table('trophies')->insert(
        [
            'name' => '1000 Pulications ',
            'points' => '3',
            'description' => 'Depassement de 100 publications par l user',
        ]
        );

        DB::table('trophies')->insert(
        [
            'name' => '1000 Votes ',
            'points' => '3',
            'description' => 'Depassement de 1000 votes par l user',
        ]
        );


                DB::table('trophies')->insert(
        [
            'name' => '1 publication par jour durant une semaine ',
            'points' => '2',
            'description' => 'l`utilisateur doit publier une publicatioon par jour Successive durant une semaine  ',
        ]
        );

                DB::table('trophies')->insert(
        [
            'name' => '10 votes par jour durant une semaine ',
            'points' => '2',
            'description' => 'l`utilisateur doit voter 10 publications par jour Successive durant une semaine r',
        ]
        );


    }
}
