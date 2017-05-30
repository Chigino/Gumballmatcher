<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fates')
            ->truncate();

        $this->call(FatesTableNormalGroupSeeder::class);
        $this->call(FatesTableIntimacyGroupSeeder::class);
        $this->call(FatesTableLegacyGroupSeeder::class);
        $this->call(FatesTableArchRivalGroupSeeder::class);
        $this->call(FatesTableTheLoversGroupSeeder::class);
    }
}
