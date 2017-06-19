<?php

use Illuminate\Database\Seeder;

class opinionsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 1,
            'created_at' => '2017-01-02',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 1,
            'created_at' => '2017-01-02',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 5,
            'choice' => 2,
            'idPublication' => 1,       
            'created_at' => '2017-01-02',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 2,
            'idPublication' => 1,
            'created_at' => '2017-01-02',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 1,
            'created_at' => '2017-01-02',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 18,
            'choice' => 2,
            'idPublication' => 1,
            'created_at' => '2017-01-02',
        ]
        );                
        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 2,
            'created_at' => '2017-01-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 2,
            'idPublication' => 2,
            'created_at' => '2017-01-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 2,
            'created_at' => '2017-01-03',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 19,
            'choice' => 1,
            'idPublication' => 2,
            'created_at' => '2017-01-03',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 1,
            'idPublication' => 2,
            'created_at' => '2017-01-03',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 17,
            'choice' => 1,
            'idPublication' => 2,
            'created_at' => '2017-01-03',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 2,
            'created_at' => '2017-01-04',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 2,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 18,
            'choice' => 2,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );                
        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 11,
            'choice' => 1,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 19,
            'choice' => 2,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 3,
            'created_at' => '2017-02-04',
        ]
        ); 
        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 2,
            'idPublication' => 4,
            'created_at' => '2017-03-01',

        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 4,
            'created_at' => '2017-03-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 4,
            'created_at' => '2017-03-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 4,
            'created_at' => '2017-03-02',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 1,
            'idPublication' => 5,
            'created_at' => '2017-04-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 5,
            'created_at' => '2017-04-01',
        ]
        ); 
        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 5,
            'created_at' => '2017-04-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 5,
            'created_at' => '2017-04-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 6,
            'choice' => 1,
            'idPublication' => 5,
            'created_at' => '2017-04-01',
        ]
        );        

        DB::table('opinions')->insert(
        [
            'idUser' => 17,
            'choice' => 1,
            'idPublication' => 6,
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 2,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 11,
            'choice' => 2,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );                
        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 19,
            'choice' => 1,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 6,
            'created_at' => '2017-05-01',
        ]
        );  
        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 7,
            'created_at' => '2017-05-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 7,
            'created_at' => '2017-05-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 7,
            'created_at' => '2017-05-01',
        ]
        ); 

        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 8,
            'created_at' => '2017-06-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 2,
            'idPublication' => 8,
            'created_at' => '2017-06-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 8,
            'created_at' => '2017-06-01',
        ]
        );   

        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 8,
            'created_at' => '2017-06-01',
        ]
        );    

        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 9,
            'created_at' => '2017-06-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 19,
            'choice' => 1,
            'idPublication' => 9,
            'created_at' => '2017-06-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 9,
            'created_at' => '2017-06-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 9,
            'created_at' => '2017-06-01',
        ]
        );            
        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 2,
            'idPublication' => 10,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 10,
            'created_at' => '2017-02-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 10,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 10,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 11,
            'created_at' => '2017-02-01',
        ]
        );   

        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 11,
            'created_at' => '2017-02-01',

        ]
        );    

        DB::table('opinions')->insert(
        [
            'idUser' => 12,
            'choice' => 1,
            'idPublication' => 11,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 19,
            'choice' => 1,
            'idPublication' => 11,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 11,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 11,
            'created_at' => '2017-02-01',
        ]
        );            
        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 2,
            'idPublication' => 11,
            'created_at' => '2017-02-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 11,
            'created_at' => '2017-02-02',
        ]
        );      

        DB::table('opinions')->insert(
        [
            'idUser' => 5,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 11,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );                
        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 19,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 12,
            'created_at' => '2017-04-01',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 12,
            'created_at' => '2017-04-02',
        ]
        );        

        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );   

        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );    

        DB::table('opinions')->insert(
        [
            'idUser' => 12,
            'choice' => 1,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 11,
            'choice' => 1,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-09',
        ]
        );            
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-10',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-10',
        ]
        );       

       DB::table('opinions')->insert(
        [
            'idUser' => 1,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-10',
        ]
        );            
        DB::table('opinions')->insert(
        [
            'idUser' => 8,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-10',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 16,
            'choice' => 2,
            'idPublication' => 13,
            'created_at' => '2017-09-10',
        ]
        ); 

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 14,
            'created_at' => '2017-10-10',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 14,
            'created_at' => '2017-10-11',
        ]
        );        

        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 14,
            'created_at' => '2017-10-11',

        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 14,
            'created_at' => '2017-10-12',

        ]
        );   

        DB::table('opinions')->insert(
        [
            'idUser' => 15,
            'choice' => 1,
            'idPublication' => 14,
            'created_at' => '2017-10-12',

        ]
        );    

DB::table('opinions')->insert(
        [
            'idUser' => 2,
            'choice' => 1,
            'idPublication' => 15,
            'created_at' => '2017-11-11',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 15,
            'created_at' => '2017-11-12',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 5,
            'choice' => 2,
            'idPublication' => 15,
            'created_at' => '2017-11-12',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 2,
            'idPublication' => 15,
            'created_at' => '2017-11-12',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 15,
            'created_at' => '2017-11-12',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 18,
            'choice' => 2,
            'idPublication' => 15,
            'created_at' => '2017-11-12',
        ]
        );                
        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 15,
            'created_at' => '2017-11-13',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 2,
            'idPublication' => 15,
            'created_at' => '2017-11-13',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 15,
            'created_at' => '2017-11-13',
        ]
        );  

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 1,
            'idPublication' => 16,
            'created_at' => '2017-12-12',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 5,
            'choice' => 2,
            'idPublication' => 16,
            'created_at' => '2017-12-12',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 2,
            'idPublication' => 16,
            'created_at' => '2017-12-12',
        ]
        );
        DB::table('opinions')->insert(
        [
            'idUser' => 10,
            'choice' => 2,
            'idPublication' => 16,
            'created_at' => '2017-12-13',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 18,
            'choice' => 2,
            'idPublication' => 16,
            'created_at' => '2017-12-13',
        ]
        );                
        DB::table('opinions')->insert(
        [
            'idUser' => 13,
            'choice' => 1,
            'idPublication' => 16,
            'created_at' => '2017-12-13',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 3,
            'choice' => 2,
            'idPublication' => 16,
            'created_at' => '2017-12-13',
        ]
        );

        DB::table('opinions')->insert(
        [
            'idUser' => 7,
            'choice' => 1,
            'idPublication' => 16,
            'created_at' => '2017-12-13',
        ]
        ); 


    }
}
