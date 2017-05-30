<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FatesTableTheLoversGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fates = [
            [
                'name' => 'Royal Romantic History I',
                'key' => 'TL-RRH1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-KING',
                    'CE-REHO'
                ]
            ],
            [
                'name' => 'Royal Romantic History I',
                'key' => 'TL-RRH2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-PRIN',
                    'CE-REHO'
                ]
            ],
            [
                'name' => 'Cursed Love',
                'key' => 'TL-CULO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-MEDU',
                    'CE-POSI'
                ]
            ],
            [
                'name' => 'Bodyguard',
                'key' => 'TL-BODY',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-HOWA',
                    'AB-ATHE'
                ]
            ],
            [
                'name' => 'Love of Nagas',
                'key' => 'TL-LOON',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-HODR',
                    'CE-FADR'
                ]
            ],
            [
                'name' => 'Emperor and Queen',
                'key' => 'TL-EMAQ',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-CHEC',
                    'AR-BLWQ'
                ]
            ],
            [
                'name' => 'Summer Sunshine',
                'key' => 'TL-SUSU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-SUFL',
                    'CE-CACT'
                ]
            ],
            [
                'name' => 'Old Affection',
                'key' => 'TL-OLAF',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-COMM',
                    'AB-ZEQU'
                ]
            ],
            [
                'name' => 'Oriental Romance I',
                'key' => 'TL-ORR1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-NOBU',
                    'AR-GUMI'
                ]
            ],
            [
                'name' => 'Oriental Romance II',
                'key' => 'TL-ORR2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MASA',
                    null
                ]
            ],
            [
                'name' => 'Childhood Friend',
                'key' => 'TL-CF',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ADVE',
                    'AB-LIMA'
                ]
            ],

        ];

        foreach ($fates as $fate) {
            $gumballs = $fate['gumballs'];
            unset($fate['gumballs']);

            DB::table('fates')
                ->updateOrInsert(
                    $fate,
                    array_merge(
                        $fate,
                        [
                            'group_id' => DB::table('groups')->where('key', '=', 'TL')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );

            FateGumballsTableSeeder::runExternally($fate['key'], $gumballs);
        }
    }
}