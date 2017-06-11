<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
            'idCountry' => 149,         
            'photo' => 'all/user_avatar.png',   
            'birthday' => Carbon::now(),
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'olea',
            'lname' => 'fadlo',
            'email' => 'olea.fadlo@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'photo' => 'all/user_avatar.png',   
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'hamza',
            'lname' => 'zakaria',
            'email' => 'hamza.zakaria@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'photo' => 'all/user_avatar.png',   
            'password' => bcrypt('Temp123*'),
        ]
        );


    }
}
