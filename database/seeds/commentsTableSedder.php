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



    }
}
