<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GumballsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gumballs')
            ->truncate();

        $this->call(GumballsTableAoluweisBladeFactionSeeder::class);
        $this->call(GumballsTableCanasEnlightenmentFactionSeeder::class);
        $this->call(GumballsTableAbyssRoarFactionSeeder::class);
        $this->call(GumballsTableRangersSongFactionSeeder::class);
    }
}
