<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AlliancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alliances')
            ->truncate();

        $alliances = [
            [
                'name' => 'Sky Pirates',
                'key' => 'SKYPR',
            ]
        ];

        foreach ($alliances as $alliance) {
            DB::table('alliances')
                ->updateOrInsert(
                    $alliance,
                    array_merge(
                        $alliance,
                        [
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
