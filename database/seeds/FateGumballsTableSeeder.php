<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FateGumballsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fate_gumballs')
            ->truncate();
    }

    /**
     * Run a externally a database seed.
     *
     * @var string $fate
     * @var array  $gumballs
     *
     * @return void
     */
    public static function runExternally($fate, array $gumballs)
    {
        if (in_array(null, $gumballs)) {
            return;
        }

        if (!DB::table('fates')
            ->where('key', '=', $fate)
            ->count()
        ) {
            die('No fate found with the key "' . $fate . '".');
        }

        $fateId = DB::table('fates')
            ->where('key', '=', $fate)
            ->first()
            ->id;

        foreach ($gumballs as $gumball) {
            if (!DB::table('gumballs')
                ->where('key', '=', $gumball)
                ->count()
            ) {
                die('No gumball found with the key "' . $gumball . '".');
            }

            $gumballId = DB::table('gumballs')
                ->where('key', '=', $gumball)
                ->first()
                ->id;

            DB::table('fate_gumballs')->updateOrInsert(
                [
                    'fate_id' => $fateId,
                    'gumball_id' => $gumballId,
                ],
                array_merge(
                    [
                        'fate_id' => $fateId,
                        'gumball_id' => $gumballId,
                    ],
                    [
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]
                )
            );
        }
    }
}
