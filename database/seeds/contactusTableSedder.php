<?php

use Illuminate\Database\Seeder;

class contactusTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('contactus')->insert(
        [
            'idUser' => 2,
            'title' => 'Icone food non clickable',
            'message' => 'Bonjour equipe achbanlik svp je voulais acceder à la categorie Food et je n y arrive pas depuis une vingtaine de minutes pourais-je m aider svpp  ',
        ]
        );

        
        DB::table('contactus')->insert(
        [
            'idUser' => 1,
            'title' => 'css not loader',
            'message' => '---------------------message--------------------------  ',
        ]
        );





    }
}
