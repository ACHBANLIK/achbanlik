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
            'photo' => 'users_avatars/basmachebbourh.png',
            'points' => '100',
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
            'photo' => 'users_avatars/olayafadlo.jpg',
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
            'photo' => 'users_avatars/hamzazakaria.jpg',
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'manal',
            'lname' => 'messrar',
            'email' => 'manal.mesrar@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );   


        DB::table('users')->insert(
        [
            'fname' => 'najwa',
            'lname' => 'benadada',
            'email' => 'najwa.benadada@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'ayoub',
            'lname' => 'mabrouk',
            'email' => 'ayoub.mabrouk8@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );   

        DB::table('users')->insert(
        [
            'fname' => 'nisrine',
            'lname' => 'fdlan',
            'email' => 'nisrine.fdlan@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 

        DB::table('users')->insert(
        [
            'fname' => 'zineb',
            'lname' => 'mouhcine',
            'email' => 'mouhcine.zineb@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );      

        DB::table('users')->insert(
        [
            'fname' => 'zineb',
            'lname' => 'elmouakit',
            'email' => 'elnouakit.zineb@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 

        DB::table('users')->insert(
        [
            'fname' => 'adam',
            'lname' => 'boujaber',
            'email' => 'boujaber.adam@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 

        DB::table('users')->insert(
        [
            'fname' => 'khadija',
            'lname' => 'lebbar',
            'email' => 'lebbar.khadija@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 

        DB::table('users')->insert(
        [
            'fname' => 'houda',
            'lname' => 'fadlo',
            'email' => 'houda.fadlo@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 

        DB::table('users')->insert(
        [
            'fname' => 'Fatimazahhra',
            'lname' => 'Zahraoui',
            'email' => 'zarharoui.fatima@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );

        DB::table('users')->insert(
        [
            'fname' => 'Sihame',
            'lname' => 'Chahid',
            'email' => 'chahid.sihame@outlook.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 

        DB::table('users')->insert(
        [
            'fname' => 'Hanane',
            'lname' => 'Risk',
            'email' => 'risk.Hanane@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        ); 


        DB::table('users')->insert(
        [
            'fname' => 'Amine',
            'lname' => 'metoual',
            'email' => 'amine.metoual@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'firas',
            'lname' => 'radi',
            'email' => 'firas.radi@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );        

        DB::table('users')->insert(
        [
            'fname' => 'majda',
            'lname' => 'tazi',
            'email' => 'majda.tazi@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );


        DB::table('users')->insert(
        [
            'fname' => 'imane',
            'lname' => 'filali',
            'email' => 'imane.fillali@gmail.com',
            'idCountry' => 149,   
            'birthday' => Carbon::now(), 
            'password' => bcrypt('Temp123*'),
        ]
        );






    }
}
