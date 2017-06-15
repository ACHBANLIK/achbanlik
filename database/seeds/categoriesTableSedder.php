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
            'title_en' => 'Travel and Transport',
            'title_fr' => 'Voyage et Transport',
            'description' => 'categorie voyage regroupe tous les avis des utilisateurs sur les desitinations international et national inclut tous les bon plans  ',
            'idAdmin'=>'1',
        ]
        );

        DB::table('categories')->insert(
        [
            'title_en' => 'Food',
            'title_fr' => 'Gastronomie',
            'description' => 'Les meilleurs plats',
            'idAdmin'=>'1',
        ]
        );        

        DB::table('categories')->insert(
        [
            'title_en' => 'health and beauty',
            'title_fr' => 'Santé et beauté',
            'description' => 'Regroupe tous les avis en relation avec la santé et les produits de beauté ',
           'idAdmin'=>'1',

        ]
        );       


        DB::table('categories')->insert(
        [
            'title_en' => 'Fashion Men',
            'title_fr' => 'Style Homme',
            'description' => 'Regroupe tous les avis en relation avec la mode Homme ',
           'idAdmin'=>'1',

        ]
        );   

  

        DB::table('categories')->insert(
        [
            'title_en' => 'Fashion Women',
            'title_fr' => 'Style Femmes',
            'description' => 'Regroupe tous les avis en relation avec la mode Femme ',
           'idAdmin'=>'1',

        ]
        );                                 


        DB::table('categories')->insert(
        [
            'title_en' => 'Hardware',
            'title_fr' => 'Matériel',
            'description' => 'Regroupe tous les avis en relation avec le materiels et les composants informatique  ',
           'idAdmin'=>'1',

        ]
        );   



        DB::table('categories')->insert(
        [
            'title_en' => 'Automobiles and Motorcycles',
            'title_fr' => 'Automobiles et Motorcycles',
            'description' => 'Regroupe tous les avis en relation les voiture et les motos  ',
           'idAdmin'=>'1',

        ]
        );          

        DB::table('categories')->insert(
        [
            'title_en' => 'Phone and Telecommunication',
            'title_fr' => 'téléphones et télécommunication',
            'description' => 'Regroupe tous les avis en relation avec les toutes les marques des telephones ainsi que tous les composants de Telecommunication  ',
           'idAdmin'=>'1',

        ]
        );

        DB::table('categories')->insert(
        [
            'title_en' => 'Home and Garden',
            'title_fr' => 'Maison et Jardin',
            'description' => 'Regroupe tous les avis en relation avec les ammeublements des maisons et des jardins ',
           'idAdmin'=>'1',

        ]
        );


        DB::table('categories')->insert(
        [
            'title_en' => 'Sports',
            'title_fr' => 'Sport',
            'description' => 'Regroupe tous les avis en relation avec l`ensemble des exercices physiques ou mentaux ',
           'idAdmin'=>'1',

        ]
        );    
     

        DB::table('categories')->insert(
        [
            'title_en' => 'Study',
            'title_fr' => 'Etudes',
            'description' => 'Regroupe tous les avis en relation avec les etudes  ',
           'idAdmin'=>'1',

        ]
        );   

        DB::table('categories')->insert(
        [
            'title_en' => 'Good Plan',
            'title_fr' => 'Bons Plans',
            'description' => 'Regroupe tous les avis en relation avec les bonnes affaires, c`est-à-dire des offres de produit ,des service ou autres qui sont promotionnelle ,exceptionnelle ect.....',
           'idAdmin'=>'1',

        ]
        );                    
   



        DB::table('categories')->insert(
        [
            'title_en' => 'Others',
            'title_fr' => 'Autres',
            'description' => 'Regroupe tous les avis en relation avec d`autres services ou produits qui ne sont pas inclus dans les categoriges proposèes par la platforme ACHBANLIK USER ',
           'idAdmin'=>'1',

        ]
        );   



    }
}
