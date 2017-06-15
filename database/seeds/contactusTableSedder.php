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
            'idUser' => 11,
            'title' => 'Besoin de plus d`information',
            'message' => '---------------------message--------------------------  ',
        ]
        );


        DB::table('contactus')->insert(
        [
            'idUser' => 1,
            'title' => 'Bugs successives ',
            'message' => '---------------------message--------------------------  ',
        ]
        );
        
        DB::table('contactus')->insert(
        [
            'idUser' => 8,
            'title' => 'Publication confidentielle a supprimer SVP',
            'message' => '---------------------message--------------------------  ',
        ]
        );

        DB::table('contactus')->insert(
        [
            'idUser' => 7,
            'title' => 'Acces a la categorie santé',
            'message' => '---------------------message--------------------------  ',
        ]
        );

        DB::table('contactus')->insert(
        [
            'idUser' => 6,
            'title' => 'Probleme d`image',
            'message' => '---------------------message--------------------------  ',
        ]
        );


        DB::table('contactus')->insert(
        [
            'idUser' => 5,
            'title' => 'Publication a supprimer',
            'message' => '---------------------message--------------------------  ',
        ]
          );

        DB::table('contactus')->insert(
        [
            'idUser' => 3,
            'title' => 'Help',
            'message' => '---------------------message--------------------------  ',
        ]
          );


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




        DB::table('contactus')->insert(
        [
            'idUser' => 18,
            'title' => ' Comment modifié ma publication ',
            'message' => 'SVP je voudrais savoir comment je peux modifier ma publication en ajoutant 2 photos ',
        ]
          );


        DB::table('contactus')->insert(
        [
            'idUser' => 19,
            'title' => ' mon profil il n`est pas accessible  ',
            'message' => 'je n`y arrive pas a acceder a ma page de profil svpppppppppp i need help ',
        ]
          );

    }
}
