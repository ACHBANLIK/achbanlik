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
            'idUser' => 1,
            'idCategory' => 1,
            'idType' => 6,  
            'text1' => 'agadir',
            'text2' => 'esaouira',
            'image1'=>'publications/DSC8633.jpg',
            'image2'=>'publications/essaouira_3098993a-small.jpg',
            'created_at' => '2017-01-02',
            'willend_at' => '2018-01-02'
                    ]
        );




        DB::table('publications')->insert(
        [
            'title' => 'Iphone 6s ou sumsung 6',
            'idUser' => 2,
            'idCategory' => 8,
            'idType' => 5,  
            'image1' => 'publications/telechargement.jpg',
            'image2' => 'publications/telechargement (1).jpg',            
            'created_at' => '2017-01-02',
            'willend_at' => '2018-01-02'
        ]
        );


        DB::table('publications')->insert(
        [
            'title' => 'Photos en Bruxelles ',
            'idUser' => 5,
            'idCategory' => 1,
            'idType' => 1,  
            'text1' => 'Svp pouvez vous me montrer qlq photos en Bruxelles d’après votre propre voyage !! Merciiii',
            'created_at' => '2017-02-01',
            'willend_at' => '2018-01-02'
        ]
        );




         DB::table('publications')->insert(
        [
            'title' => 'Envoi d`un colis par amana',
            'idUser' => 19,
            'idCategory' => 13,
            'idType' => 4,  
            'text1' => 'Canada',
            'text2' => 'USA',
            'created_at' => '2017-04-01',
            'willend_at' => '2018-12-12',
        ]
        );      


          DB::table('publications')->insert(
        [
            'title' => 'Un  bon dentifrice',
            'idUser' => 18,
            'idCategory' => 3,
            'idType' => 1,  
            'text1' => 'Coucou les filles c est ma premiere publication donc j espere avoir des retours 🙈 je suis a la recherche d un dentifrice ou d un produit qui fait blanchir parfaitement les dents sans les abimer et j`hesite entre elgydium et sensodyne le quel vous me recommender',
            'image1'=>'publications/DENTIFRICE.PNG',
            'created_at' => '2017-05-01',
            'willend_at' => '2018-12-12',
        ]   
        );  



           DB::table('publications')->insert(
        [
            'title' => 'Vitamine pour cheveux ',
            'idUser' => 9,
            'idCategory' => 3,
            'idType' => 1,  
            'text1' => 'Bonsoir les testeurs je compte acheter des vitamines pour cheveux a ma mère et j`hésite entre sugar bear et hairtamin..des préférences? Achbanlikom a team achbanlik :D',
            'image1'=>'publications/vitamines-cheveux-1.jpg',
            'created_at' => '2017-05-01',
            'willend_at' => '2018-12-12',
        ]
        );   


           DB::table('publications')->insert(
        [
            'title' => ' Gateaux a rabat  ',
            'idUser' => 2,
            'idCategory' => 2,
            'idType' => 3,  
            'text1' => 'Bonjour les achbanlik members ! Où est-ce que je peux trouver quelqu`un sur Rabat qui fait ce genre de gateaux?',
            'image1'=>'publications/trophy-award-icon.jpg',
            'created_at' => '2017-06-01',
            'willend_at' => '2018-12-12',
        ]
        );   

           DB::table('publications')->insert(
        [
            'title' => 'Formation universitaire en Finance ',
            'idUser' => 17,
            'idCategory' => 11,
            'idType' => 1,  
            'text1' => 'Je cherche des écoles de commerce sur Casablanca et régions pour une bonne formation en Finance ',
            'created_at' => '2017-06-01',
            'willend_at' => '2018-12-12',
        ]
        ); 


 
           DB::table('publications')->insert(
        [
            'title' => 'Un bon café a kenitra? ',
            'idUser' => 5,
            'idCategory' => 12,
            'idType' => 1,  
            'text1' => 'Bonsoir les testeurs Svp un bon café sur kénitra qui offre un délicieux ftour avec un prix raisonnable , Merci et 3wacher mebrouka',
            'created_at' => '2017-02-01',
            'willend_at' => '2018-12-12',
        ]
        );    
   

           DB::table('publications')->insert(
        [
            'title' => 'Avis LG G6',
            'idUser' => 11,
            'idCategory' => 8,
            'idType' => 2,  
            'image1' => 'publications/lgg6-phone_tile.jpg',
            'status' => 0,
            'created_at' => '2017-02-01',
            'willend_at' => '2018-12-12',
        ]
        );          


           DB::table('publications')->insert(
        [
            'title' => 'Avis sur la Compagnie Air arabia ',
            'idUser' => 2,
            'idCategory' => 1,
            'idType' => 3,  
            'text1' => 'Bonsoir la communauté, svp j`ai besoin de vos retours concernant la compagnie Air Arabia . Et est-ce que quelqu`un sait on a le droit à combien de kilos pour le bagage à main ?? Merci d`avance :D',
            'image1'=>'publications/19059431_10209124761059207_8264169762403956627_n.jpg',
            'created_at' => '2017-04-01',
            'willend_at' => '2018-12-12',
        ]
        );               
           DB::table('publications')->insert(
        [
            'title' => 'Vos avis svp ',
            'idUser' => 19,
            'idCategory' => 2,
            'idType' => 2,  
            'image1' => 'publications/19093064_1383922548362673_1337412763849678220_o.jpg',
            'created_at' => '2017-09-09',
            'willend_at' => '2018-12-12',
        ]
        );


           DB::table('publications')->insert(
        [
            'title' => 'Voiture pour un trajet de 35 km ',
            'idUser' => 10,
            'idCategory' => 7,
            'idType' => 1,  
            'text1' => 'Svp quelle voiture pour un trajet de 35km par jour (dans la ville) pour une femme. 
Pour un budget de 50000dh ( niveau consommation, fiabilité, pannes et tt )Perso j`hésite entre picanto, punto ou i10 J`attends vos retour',
            'created_at' => '2017-10-10',
            'willend_at' => '2018-12-12',
        ]
        );          

           DB::table('publications')->insert(
        [
            'title' => ' Avis sur ce programme plz',
            'idUser' => 6,
            'idCategory' => 1,
            'idType' => 2,  
            'image1'=>'publications/19055474_1555916724478276_251641255179476873_o.jpg',
            'created_at' => '2017-11-11',
            'willend_at' => '2018-12-12',
        ]
        ); 

           DB::table('publications')->insert(
        [
            'title' => 'Bons plans ',
            'idUser' => 7,
            'idCategory' => 12,
            'idType' => 5,  
            'image1'=>'publications/19148905_10213320342222230_1843035614367982541_n.jpg',
             'image2'=>'publications/bon plan.PNG',
            'created_at' => '2017-12-12',
            'willend_at' => '2018-12-12',
        ]
        );       

           DB::table('publications')->insert(
        [
            'title' => 'Un balcon pour les amoureux de la nature',
            'idUser' => 2,
            'idCategory' => 9,
            'idType' => 3,  
            'text1'=>'Pour les amoureaux des plantes et des balcons comme moi je partage avec vous cette photo pour vous inspirer',
             'image1'=>'publications/ff7c43388b61477429d9998e244957d6.jpg',
            'created_at' => '2017-10-14',
            'willend_at' => '2018-12-12',
        ]
        );     

           DB::table('publications')->insert(
        [
            'title' => 'voyage en Espagne 2017',
            'idUser' => 7,
            'idCategory' => 1,
            'idType' => 4,  
            'text1'=>'Mois 9 ',
            'text2'=>' Mois 10',
            'created_at' => '2017-11-14',
            'willend_at' => '2018-12-12',
        ]
        );  

           DB::table('publications')->insert(
        [
            'title' => 'Le quel vous preferez ?',
            'idUser' => 18,
            'idCategory' => 5,
            'idType' => 5,  
            'image1'=>'publications/bag1.png',
             'image2'=>'publications/bag2.png',
            'created_at' => '2017-11-14',
            'willend_at' => '2018-12-12',
        ]
        );            


           DB::table('publications')->insert(
        [
            'title' => 'Quelles couleurs Choisir pour mon bureau ?',
            'idUser' => 3,
            'idCategory' => 9,
            'idType' => 6,  
             'text1'=>'Bureau en blanc avec une chaise Marron  ',
             'text2'=>' Bureau en gris foncé avec une chaise Marron',
            'image1'=>'publications/bureau1.png',
             'image2'=>'publications/bureau2.png',
            'created_at' => '2017-11-14',
            'willend_at' => '2018-12-12',
        ]
        );   

           

           DB::table('publications')->insert(
        [
            'title' => 'Quel sport pour maigrir?',
            'idUser' => 18,
            'idCategory' => 10,
            'idType' => 5,  

            'image1'=>'publications/natation.jpg',
             'image2'=>'publications/shutterstock_180557201.jpg',
            'created_at' => '2017-05-10',
            'willend_at' => '2018-10-14',
        ]
        );       



        DB::table('publications')->insert(
        [
            'title' => 'Loyer Santorini',
            'idUser' => 1,
            'idCategory' => 1,
            'idType' => 3,  
            'text1' => 'Coucou les amis 😘😘 svp des contacts pour le loyer a nerja ( de préference a burriana beach ). Torremolinos ou puerto banus pour un petit appart pour 2 personnes ? Bonne soirée et merci d `avance',
            'image1'=>'publications/telechargement (2).jpg',
            'created_at' => '2017-03-01',
            'willend_at' => '2018-12-12',
        ]
        );
        
            DB::table('publications')->insert(
        [
            'title' => 'Quel Marque vous me recommandez ??',
            'idUser' => 18,
            'idCategory' => 6,
            'idType' => 6,  
             'text1'=>'HP EliteBook 820 G4 (7500U, Full HD)  ',
             'text2'=>'Lenovo ThinkPad Yoga 260 20FD001XGE Convertible ',
            'image1'=>'publications/elitebook_820_gallery1_tcm_245_1493510.jpg',
             'image2'=>'publications/ThinkPad_Yoga_260_3.jpg',
            'created_at' => '2017-05-07',
            'willend_at' => '2018-10-07',
        ]
        );                
    }
}
