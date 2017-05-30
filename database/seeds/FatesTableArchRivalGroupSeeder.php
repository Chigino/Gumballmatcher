<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FatesTableArchRivalGroupSeeder extends Seeder
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
                'name' => 'Nemesis I',
                'key' => 'AR-NEM1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-VAMP',
                    'AR-VAHU'
                ]
            ],
            [
                'name' => 'Natural Enemy II',
                'key' => 'AR-NEN2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-DEMO',
                    'CE-DEHU'
                ]
            ],
            [
                'name' => 'Light and Dark I',
                'key' => 'AR-LAD1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-FAAN',
                    'AB-ANDE'
                ]
            ],
            [
                'name' => 'Light and Dark II',
                'key' => 'AR-LAD2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-APOL',
                    'AR-HADE'
                ]
            ],
            [
                'name' => 'Dragon Slayer',
                'key' => 'AR-DRSL',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-WARR',
                    'AR-DADR'
                ]
            ],
            [
                'name' => 'Dawn of Justice',
                'key' => 'AR-DAOJ',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-NIKN',
                    'CE-JUHE'
                ]
            ],
            [
                'name' => 'Civil War',
                'key' => 'AR-CIWA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ARMO',
                    'AB-GUAR'
                ]
            ],
            [
                'name' => 'Battle of Twilight',
                'key' => 'AR-BAOT',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-DUEL',
                    'AB-ANDE'
                ]
            ],
            [
                'name' => 'Slaughter House',
                'key' => 'AR-SLHO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MAMM',
                    'AB-BUTC'
                ]
            ],
            [
                'name' => 'Eastern Holy War',
                'key' => 'AR-EAHW',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-LIKI',
                    'RS-SALA'
                ]
            ],
            [
                'name' => 'Creation and Destruction',
                'key' => 'AR-CRAD',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-DEST',
                    'AR-CREA'
                ]
            ],
            [
                'name' => 'Song of Ice and Fire',
                'key' => 'AR-SOIAF',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-FIEL',
                    'AB-SNOW'
                ]
            ],
            [
                'name' => 'Soul Reaping',
                'key' => 'AR-SORE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-SORE',
                    'RS-GHCA'
                ]
            ],
            [
                'name' => 'Arch Rival',
                'key' => 'AR-ARRI',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-NIKN',
                    null
                ]
            ],
            [
                'name' => 'Exploiter',
                'key' => 'AR-EXPL',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-PRIN',
                    'RS-SLAV'
                ]
            ],
            [
                'name' => 'Undercover Affair',
                'key' => 'AR-UNAF',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-BLSH',
                    'CE-BLWO'
                ]
            ],
            [
                'name' => 'Plunder',
                'key' => 'AR-PLUN',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BAND',
                    'CE-MERC'
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
                            'group_id' => DB::table('groups')->where('key', '=', 'AR')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );

            FateGumballsTableSeeder::runExternally($fate['key'], $gumballs);
        }
    }
}