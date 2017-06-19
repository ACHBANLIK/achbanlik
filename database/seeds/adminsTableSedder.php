<?php

use Illuminate\Database\Seeder;

class adminsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   		
	{



   		DB::table('admins')->insert(
        [
            'fname' => 'super',
            'lname' => 'admin',
            'email' => 'admin@achbanlik.ma',
            'password' => bcrypt('Temp123*'),
            'role' => 1,
        ]
        );


        DB::table('admins')->insert(
         [
            'fname' => 'olea',
            'lname' => 'faldo',
            'email' => 'fadlo.olea@achbanlik.ma',
            'password' => bcrypt('Temp123*'),
            'photo' => 'admins_avatars/olayafadlo.jpg',
            'role' => 2,
        ] 
        );


        DB::table('admins')->insert(
         [
            'fname' => 'basma',
            'lname' => 'chebbourh',
            'email' => 'basma.chebbourh@achbanlik.ma',
            'password' => bcrypt('Temp123*'),
            'photo' => 'admins_avatars/admin_avatar.png',
            'role' => 2,
        ]
        );



        DB::table('admins')->insert(
         [
            'fname' => 'hamza',
            'lname' => 'zakaria',
            'email' => 'hamza.zakaria@achbanlik.ma',
            'password' => bcrypt('Temp123*'),
            'role' => 2,
        ] 
        );

    }
}
