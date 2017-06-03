<?php

use Illuminate\Database\Seeder;

class usersTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('users')->insert(
        [
            'fname' => 'basma',
            'lname' => 'chebbourh',
            'email' => 'basma.chebbourh@gmail.com',
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'olea',
            'lname' => 'fadlo',
            'email' => 'olea.fadlo@gmail.com',
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'hamza',
            'lname' => 'zakaria',
            'email' => 'hamza.zakaria@gmail.com',
            'password' => bcrypt('Temp123*'),
        ]
        );


    }
}
