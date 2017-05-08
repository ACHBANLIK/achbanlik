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
   		DB::table('admins')->insert([
            'fname' => 'achbanlik',
            'lname' => 'admin',
            'email' => 'admin@achbanlik.ma',
            'password' => bcrypt('Temp123*'),
            'remember_token' => str_random(60),
            'role' => 1,
        ]);
    }
}
