<?php

use Illuminate\Database\Seeder;

class categoriesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('categories')->insert(
        [
            'title' => 'Voyage',
            'description' => 'categorie voyage regroupe tous les avis des utilisateurs sur les desitinations international et national inclut tous les bon plans  ',
            'idAdmin'=>'1',
        ]
        );

        DB::table('categories')->insert(
        [
            'title' => 'Food',
            'description' => 'Les meilleurs plats',
            'idAdmin'=>'1',
        ]
        );        



        DB::table('categories')->insert(
        [
            'title' => 'Sante',
            'description' => 'Regroupe tous les avis en ralation avec la santé ',
           'idAdmin'=>'1',

        ]
        );     






    }
}
