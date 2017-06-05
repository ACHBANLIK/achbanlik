<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(adminsTableSedder::class);
         $this->call(usersTableSedder::class);
        $this->call(trophiesTableSedder::class);
        $this->call(categoriesTableSedder::class);
        $this->call(contactusTableSedder::class);

    }
}
