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
         $this->call(AlliancesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(FactionsTableSeeder::class);
         $this->call(GumballsTableSeeder::class);
         $this->call(GroupsTableSeeder::class);
         $this->call(FateGumballsTableSeeder::class);
         $this->call(FatesTableSeeder::class);
    }
}
