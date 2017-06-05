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
            'idCountry' => 150,         
            'photo' => 'storage/all/user_avatar.png',   
            'birthday' => Carbon::now()->format('d-m-Y'); 
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'olea',
            'lname' => 'fadlo',
            'email' => 'olea.fadlo@gmail.com',
            'idCountry' => 150,   
            'birthday' => Carbon::now()->format('d-m-Y'); 
            'photo' => 'storage/all/user_avatar.png',   
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'hamza',
            'lname' => 'zakaria',
            'email' => 'hamza.zakaria@gmail.com',
            'idCountry' => 150,   
            'birthday' => Carbon::now()->format('d-m-Y'); 
            'photo' => 'storage/all/user_avatar.png',   
            'password' => bcrypt('Temp123*'),
        ]
        );


    }
}
