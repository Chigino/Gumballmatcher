<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FatesTableIntimacyGroupSeeder extends Seeder
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
                'name' => 'Gladiator Competition',
                'key' => 'IN-GLCO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-GLAD',
                    'AB-SPAR'
                ]
            ],
            [
                'name' => 'Jungle Guardian',
                'key' => 'IN-JUGU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    null,
                    'AR-CLAW'
                ]
            ],
            [
                'name' => 'Mysterious Plant I',
                'key' => 'IN-MYP1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-WOTR',
                    'CE-SUFL'
                ]
            ],
            [
                'name' => 'Mysterious Plant II',
                'key' => 'IN-MYP2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-WOTR',
                    'CE-CACT'
                ]
            ],
            [
                'name' => 'Voyager I',
                'key' => 'IN-VOY1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-PIRA',
                    'RS-KRCA'
                ]
            ],
            [
                'name' => 'Voyager II',
                'key' => 'IN-VOY2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-PIRA',
                    'RS-GHCA'
                ]
            ],
            [
                'name' => 'Godfather I',
                'key' => 'IN-GOD1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-NO1M',
                    'AR-COGO'
                ]
            ],
            [
                'name' => 'Godfather II',
                'key' => 'IN-GOD2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-NO2M',
                    'AR-COGO'
                ]
            ],
            [
                'name' => 'Godfather III',
                'key' => 'IN-GOD3',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-NO3M',
                    'AR-COGO'
                ]
            ],
            [
                'name' => 'Godfather IV',
                'key' => 'IN-GOD4',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-NO4M',
                    'AR-COGO'
                ]
            ],
            [
                'name' => 'Godfather V',
                'key' => 'IN-GOD5',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-NO5M',
                    'AR-COGO'
                ]
            ],

            [
                'name' => 'Soldier',
                'key' => 'IN-SOLD',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-GUAR',
                    'AR-COMM'
                ]
            ],
            [
                'name' => 'Special Troops',
                'key' => 'IN-SPTR',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-COMM',
                    'AR-COMM'
                ]
            ],
            [
                'name' => 'King Kong',
                'key' => 'IN-KIKO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-MOKI',
                    'RS-PETE'
                ]
            ],
            [
                'name' => 'Father and Son I',
                'key' => 'IN-FAS1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-KING',
                    'CE-PRIN'
                ]
            ],
            [
                'name' => 'Lead Actor and Director',
                'key' => 'IN-LAAD',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ADVE',
                    'RS-PETE'
                ]
            ],
            [
                'name' => 'Honor Among Thieves',
                'key' => 'IN-HOAT',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BAND',
                    'RS-KAIT'
                ]
            ],
            [
                'name' => 'Flame Affinity',
                'key' => 'IN-FLAF',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-HELL',
                    'CE-FIEL'
                ]
            ],
            [
                'name' => 'Father and Son II',
                'key' => 'IN-FAS2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-HEKI',
                    'RS-NALA'
                ]
            ],
            [
                'name' => 'Allegiance',
                'key' => 'IN-ALLE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-HADE',
                    'AR-SKLO'
                ]
            ],
            [
                'name' => 'God\'s Gift',
                'key' => 'IN-GOGI',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ATHE',
                    null
                ]
            ],
            [
                'name' => 'Love like Fish to Water',
                'key' => 'IN-LLFW',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-WAEL',
                    'RS-MERM'
                ]
            ],
            [
                'name' => 'Affinity Like Snow',
                'key' => 'IN-AFLS',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-SNOW',
                    'AR-FRQU'
                ]
            ],
            [
                'name' => 'Best Partners',
                'key' => 'IN-BEPA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-BUTC',
                    null
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
                            'group_id' => DB::table('groups')->where('key', '=', 'IN')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );

            FateGumballsTableSeeder::runExternally($fate['key'], $gumballs);
        }
    }
}