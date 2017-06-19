<?php

use Illuminate\Database\Seeder;
class commentsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        
    {



        DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 1,
            'text' => 'mon commentaire',


        ]
        );


        DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 4,
            'text' => 'Sa Go to Antwerp aussi la belgique est un beau pays',
            'created_at' => '2017-03-01', 
        ]
        );


         DB::table('comments')->insert(
        [
            'idUser' => 10,
            'idPublication' => 5,
            'text' => 'Ça coûte chère déjà siftha juste enn france makamlach hta nass kilo ppar amana hasboli 400dh mais weslat f2 jours',
            'created_at' => '2017-04-01', 

        ]
        );       


         DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 5,
            'text' => 'Malin dar Kano sifto Lia chi 15kg b 1500dh l canada',
            'created_at' => '2017-04-02', 

        ]
        );

          DB::table('comments')->insert(
        [
            'idUser' => 4,
            'idPublication' => 5,
            'text' => '1kg sifto par fedex lmon oncle b carte d etudiant khallast 350 dh 😂✌🏻',
            'created_at' => '2017-04-02', 

        ]
        );   
          
           DB::table('comments')->insert(
        [
            'idUser' => 9,
            'idPublication' => 5,
            'text' => 'Usa 10 kilo a 1500 dh',
            'created_at' => '2017-04-02', 
        ]
        );            
           DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 6,
            'text' => 'elgydium  ',
            'created_at' => '2017-05-01',
        ]
        );       

           DB::table('comments')->insert(
        [
            'idUser' => 3,
            'idPublication' => 6,
            'text' => 'hta wahed fihom ana j`utilse Aloe Vera de Forever vraiment waa3er ',
            'created_at' => '2017-05-02',
        ]
        );         



           DB::table('comments')->insert(
        [
            'idUser' => 17,
            'idPublication' => 6,
            'text' => ' sensodyne  ',
            'created_at' => '2017-05-02',
        ]
        );           


           DB::table('comments')->insert(
        [
            'idUser' => 18,
            'idPublication' => 6,
            'text' => ' Lavez vos dents 2 fois par semaine avec du bicarbonate de soude o ghadi techofi la difference mais attention il faut mettre juste une petite quantité ✌ ana jrbthom bzouj mauvaise affaire ',
            'created_at' => '2017-05-02',
        ]
        );           


           DB::table('comments')->insert(
        [
            'idUser' => 6,
            'idPublication' => 6,
            'text' => ' sensodyne Top ',
            'created_at' => '2017-05-03',
        ]
        );           


           DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 6,
            'text' => 'elgydium It`s the best choice  ',
            'created_at' => '2017-05-03',
        ]
        );   

           DB::table('comments')->insert(
        [
            'idUser' => 18,
            'idPublication' => 7,
            'text' => ' Sugar bear est parfait et en plus il a du bon goût je pense qu`il coûte 500dh ',
            'created_at' => '2017-05-01',

        ]
        );   

          DB::table('comments')->insert(
        [
            'idUser' => 17,
            'idPublication' => 7,
            'text' => ' Sugar bear est parfait et en plus il a du bon goût je pense qu`il coûte 500dh ',
            'created_at' => '2017-05-01',
        ]
        );       
        



          DB::table('comments')->insert(
        [
            'idUser' => 18,
            'idPublication' => 8,
            'text' => ' la page sucre et cannelle moulatha sur rabat ',
            'created_at' => '2017-06-02',

        ]
        );   


          DB::table('comments')->insert(
        [
            'idUser' => 10,
            'idPublication' => 8,
            'text' => ' Amoud ',
            'created_at' => '2017-06-02',
        ]
        );                    
              
          DB::table('comments')->insert(
        [
            'idUser' => 8,
            'idPublication' => 8,
            'text' => ' Ghita Delice elle est top',
            'created_at' => '2017-06-02',
        ]
        );    


          DB::table('comments')->insert(
        [
            'idUser' => 3,
            'idPublication' => 8,
            'text' => ' Kayn 1 à bd okba agdal f dekhla mn jiht fal ould oumeir ma39eltch 3la smyto',
            'created_at' => '2017-06-02',
        ]
        );                 
          DB::table('comments')->insert(
        [
            'idUser' => 5,
            'idPublication' => 8,
            'text' => ' Ghita Delice elle est top',
            'created_at' => '2017-06-03',
        ]
        );    


          DB::table('comments')->insert(
        [
            'idUser' => 11,
            'idPublication' => 8,
            'text' => ' Ouafaa cakes',
            'created_at' => '2017-06-03',
        ]
        );   
          DB::table('comments')->insert(
        [
            'idUser' => 12,
            'idPublication' => 8,
            'text' => ' Ghita Delice elle est top',
            'created_at' => '2017-06-03',
        ]
        );    


          DB::table('comments')->insert(
        [
            'idUser' => 15,
            'idPublication' => 8,
            'text' => ' Ghita Delice',
            'created_at' => '2017-06-03',
        ]
        );   

          DB::table('comments')->insert(
        [
            'idUser' => 16,
            'idPublication' => 8,
            'text' => ' Je pense amoudou kadire hade les gateaux comme ca',
            'created_at' => '2017-06-04',
        ]
        );            
          DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 8,
            'text' => ' Le trefle de hassane',
            'created_at' => '2017-06-04',
        ]
        );

          DB::table('comments')->insert(
        [
            'idUser' => 14,
            'idPublication' => 9,
            'text' => '  Tu peux visiter centre fin de casa aindiab',
            'created_at' => '2017-06-01',

        ]
        );      

          DB::table('comments')->insert(
        [
            'idUser' => 11,
            'idPublication' => 9,
            'text' => ' ISCAE',
            'created_at' => '2017-06-01',
        ]
        );                            

          DB::table('comments')->insert(
        [
            'idUser' => 8,
            'idPublication' => 9,
            'text' => '  ENCG',
            'created_at' => '2017-06-01',
        ]
        );      

          DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 9,
            'text' => 'IUC',
            'created_at' => '2017-06-01',
        ]
        );                            
          DB::table('comments')->insert(
        [
            'idUser' => 10,
            'idPublication' => 9,
            'text' => '   ISG commerce à Gauthier ',
            'created_at' => '2017-06-02',
        ]
        );      

          DB::table('comments')->insert(
        [
            'idUser' => 7,
            'idPublication' => 9,
            'text' => '  University mundiapolise',
            'created_at' => '2017-06-02',
        ]
        );                            

          DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 9,
            'text' => '  ENCG',
            'created_at' => '2017-06-02',
        ]
        ); 
          DB::table('comments')->insert(
        [
            'idUser' => 17,
            'idPublication' => 10,
            'text' => 'Métropole',
            'created_at' => '2017-02-01',

        ]
        ); 

          DB::table('comments')->insert(
        [
            'idUser' => 19,
            'idPublication' => 10,
            'text' => ' Manifestez vous les Kénitris',
            'created_at' => '2017-02-01',
        ]
        );         
        
          DB::table('comments')->insert(
        [
            'idUser' => 3,
            'idPublication' => 11,
            'text' => 'Jamias testé mais je vois pas mal de "review" sur Internet et je trouve que c`est un très bon téléphone.À considérer aussi le LG G6. Je te conseille de voir des vidéos sur YouTube qui font le "review" de ces smartphones.',
            'created_at' => '2017-02-01',
        ]
        );            
          DB::table('comments')->insert(
        [
            'idUser' => 5,
            'idPublication' => 11,
            'text' => ' J`ai testé cette marque depuis 4ans jusqu`à aujourd`hui je pourrai te confirme qu`il est juste magnifique photos,et tt',
            'created_at' => '2017-02-01',
        ]
        );  
          DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 11,
            'text' => ' A Eviter chof lik chi iphone hsen 6 ',
            'created_at' => '2017-02-02',
        ]
        ); 

          DB::table('comments')->insert(
        [
            'idUser' => 16,
            'idPublication' => 12,
            'text' => ' 10kg ',
            'created_at' => '2017-04-01',
        ]
        ); 

          DB::table('comments')->insert(
        [
            'idUser' => 16,
            'idPublication' => 12,
            'text' => ' 10kg ',
            'created_at' => '2017-04-01',
        ]
        ); 
          DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 12,
            'text' => ' Soit 10 soit 7 mais generalement 10 kg',
            'created_at' => '2017-04-01',
        ]
        ); 
          DB::table('comments')->insert(
        [
            'idUser' => 11,
            'idPublication' => 12,
            'text' => ' 10 Kg bagage à main ( Cabine ) : http://www.airarabia.com/fr/hand-baggage 
Sinon tu pourras accéder aux détails de ta réservation avec le numéro de Résa sur le site de la compagnie , puis tu vas sur " gérer mes réservations" et a ce niveau tu auras toutes les informations concernant ton dossier ( poids de bagage "Soute , cabine " , infos voyageurs ....Etc ) , bon voyage ;) ',
           'created_at' => '2017-04-01',
        ]
        ); 

          DB::table('comments')->insert(
        [
            'idUser' => 12,
            'idPublication' => 12,
            'text' => '  Air arabia matayzayroche f bagage li taytla3e .l`essentiel homa les dimensions dyal sac à main ykono respecte . Ama 10 j`usqua 20 kg machi mochkile',
            'created_at' => '2017-04-01',
        ]
        ); 

          DB::table('comments')->insert(
        [
            'idUser' => 12,
            'idPublication' => 13,
            'text' => '  Floooooop',
            'created_at' => '2017-09-09',
        ]
        ); 


          DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 13,
            'text' => '  Top du top',
            'created_at' => '2017-09-10',
        ]
        ); 



          DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 13,
            'text' => '  Floooooop',
            'created_at' => '2017-09-10',
        ]
        );       

          DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 14,
            'text' => '  Je te recommande C3 une bonne consommation',
            'created_at' => '2017-10-11',
        ]
        );    

           DB::table('comments')->insert(
        [
            'idUser' => 15,
            'idPublication' => 14,
            'text' => '  Punto',
            'created_at' => '2017-10-12',
        ]
        );   

           DB::table('comments')->insert(
        [
            'idUser' => 15,
            'idPublication' => 15,
            'text' => ' J ai deja fait ce trajet et c etai super',
            'created_at' => '2017-11-11',
        ]
        );  



           DB::table('comments')->insert(
        [
            'idUser' => 1,
            'idPublication' => 15,
            'text' => 'Pour une première fois bon programme',
            'created_at' => '2017-11-11',
        ]
        );  


           DB::table('comments')->insert(
        [
            'idUser' => 2,
            'idPublication' => 16,
            'text' => 'Dommage on a déjà eu les billets',
            'created_at' => '2017-12-12',
        ]
        );  
           DB::table('comments')->insert(
        [
            'idUser' => 8,
            'idPublication' => 16,
            'text' => 'Bon affaires les tarif convenable pour les deux plans ',
            'created_at' => '2017-12-12',
        ]
        );                  

    }
}
