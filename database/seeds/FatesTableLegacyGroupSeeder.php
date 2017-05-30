<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FatesTableLegacyGroupSeeder extends Seeder
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
                'name' => 'Sorcery Legacy',
                'key' => 'LE-SOLE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-WITC',
                    'AB-SORC'
                ]
            ],
            [
                'name' => 'Demon Hunter',
                'key' => 'LE-DEHU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-DEHU',
                    'AR-VAHU'
                ]
            ],
            [
                'name' => 'Legacy of the Sea I',
                'key' => 'LE-LTS1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-KRCA',
                    'CE-POSI'
                ]
            ],
            [
                'name' => 'Heritage of the Sea II',
                'key' => 'LE-HTS2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-GHCA',
                    'CE-POSI'
                ]
            ],
            [
                'name' => 'Heritage of the Sea III',
                'key' => 'LE-HTS3',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-PIRA',
                    'CE-POSI'
                ]
            ],
            [
                'name' => 'Toxin Research',
                'key' => 'LE-TORE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-PHAR',
                    'CE-CYBO'
                ]
            ],
            [
                'name' => 'Commander',
                'key' => 'LE-COMM',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-CRUS',
                    'RS-LIKI'
                ]
            ],
            [
                'name' => 'Heart of Warrior',
                'key' => 'LE-HEOW',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MUSA',
                    'RS-PAND'
                ]
            ],
            [
                'name' => 'Killer',
                'key' => 'LE-KILL',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-SHAS',
                    'CE-BLWO'
                ]
            ],
            [
                'name' => 'Light Faith I',
                'key' => 'LE-LIF1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-PRIE',
                    'RS-APOL'
                ]
            ],
            [
                'name' => 'Light Faith II',
                'key' => 'LE-LIF2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-SAGE',
                    'RS-APOL'
                ]
            ],
            [
                'name' => 'Lord of Underworld',
                'key' => 'LE-LOOU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-SORE',
                    'AR-HADE'
                ]
            ],
            [
                'name' => 'Flame Legacy',
                'key' => 'LE-FLLE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-FIEL',
                    'CE-PHOE'
                ]
            ],
            [
                'name' => 'Champion\'s Legacy',
                'key' => 'LE-CHLE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ADVE',
                    'AB-WARR'
                ]
            ],
            [
                'name' => 'Magic Legacy',
                'key' => 'LE-MALE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-MAGE',
                    'CE-MABO'
                ]
            ],
            [
                'name' => 'Fighting God\'s Legacy I',
                'key' => 'LE-FGL1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-GLAD',
                    'AB-HERC'
                ]
            ],
            [
                'name' => 'Lurker',
                'key' => 'LE-LURK',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-SPY',
                    'AR-SHAS'
                ]
            ],
            [
                'name' => 'Soul of Undead',
                'key' => 'LE-SOOU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-DEKN',
                    'AR-LIKI'
                ]
            ],
            [
                'name' => 'God of Fight\'s Inheritance',
                'key' => 'LE-GOFI',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-HERC',
                    'AB-SPAR'
                ]
            ],
            [
                'name' => 'Sky Guardian',
                'key' => 'LE-SKGU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-CAPT',
                    'RS-NELS'
                ]
            ],
            [
                'name' => 'Divination of Life',
                'key' => 'LE-DIOL',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-TARO',
                    'AB-HIPR'
                ]
            ],
            [
                'name' => 'Road of Music',
                'key' => 'LE-ROOM',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MINS',
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
                            'group_id' => DB::table('groups')->where('key', '=', 'LE')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );

            FateGumballsTableSeeder::runExternally($fate['key'], $gumballs);
        }
    }
}