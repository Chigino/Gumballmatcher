<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FatesTableNormalGroupSeeder extends Seeder
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
                'name' => 'Pyramid Sale',
                'key' => 'NO-PYSA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ADVE',
                    'AB-ATHE'
                ]
            ],
            [
                'name' => 'Forge a sword',
                'key' => 'NO-FOAS',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-SWOR',
                    'AB-BLAC'
                ]
            ],
            [
                'name' => 'Sword and Spell',
                'key' => 'NO-SWAS',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-SWOR',
                    'CE-MAGE'
                ]
            ],
            [
                'name' => 'Lightning and Thunder',
                'key' => 'NO-LIAT',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-MAGE',
                    'CE-DWKI'
                ]
            ],
            [
                'name' => 'Manhunt!',
                'key' => 'NO-MANH',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BAND',
                    'RS-BOHU'
                ]
            ],
            [
                'name' => 'Punish Evil',
                'key' => 'NO-PUEV',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BAND',
                    'AB-ZORR'
                ]
            ],
            [
                'name' => 'Chess Competition',
                'key' => 'NO-CHCO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-TARO',
                    'AR-CHEC'
                ]
            ],
            [
                'name' => 'Monarchic Hymn',
                'key' => 'NO-MOHY',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MINS',
                    'CE-KING'
                ]
            ],
            [
                'name' => 'Paean of the Gods',
                'key' => 'NO-POTG',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MINS',
                    'AR-CREA'
                ]
            ],
            [
                'name' => 'Hero Paean',
                'key' => 'NO-HEPA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MINS',
                    'AB-WARR'
                ]
            ],
            [
                'name' => 'Hunter I',
                'key' => 'NO-HUN1',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BOHU',
                    'AR-PRED'
                ]
            ],
            [
                'name' => 'Hunter II',
                'key' => 'NO-HUN2',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BOHU',
                    'AR-VAHU'
                ]
            ],
            [
                'name' => 'Hunter III',
                'key' => 'NO-HUN3',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-BOHU',
                    'CE-DEHU'
                ]
            ],
            [
                'name' => 'Medical Science',
                'key' => 'NO-MESC',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-PRIE',
                    'AR-PHAR'
                ]
            ],
            [
                'name' => 'Follower',
                'key' => 'NO-FOLL',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-PRIE',
                    'RS-SAGE'
                ]
            ],
            [
                'name' => 'I, robot',
                'key' => 'NO-IROB',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-MACH',
                    'RS-ZERO'
                ]
            ],
            [
                'name' => 'Mech Champion',
                'key' => 'NO-MECH',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-ZERO',
                    'AB-ARMO'
                ]
            ],
            [
                'name' => 'Pet Breeder',
                'key' => 'NO-PEBR',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-SORC',
                    'CE-FUCA'
                ]
            ],
            [
                'name' => 'Crime Cracker',
                'key' => 'NO-CRCR',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-NIKN',
                    'AB-ZORR'
                ]
            ],
            [
                'name' => 'Extraterrestrial Warrior',
                'key' => 'NO-EXRA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-PRED',
                    'AR-TEMP'
                ]
            ],
            [
                'name' => 'Soul Reliquary',
                'key' => 'NO-SORE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-GHCA',
                    'AR-LIKI'
                ]
            ],
            [
                'name' => 'Time Traveler',
                'key' => 'NO-TITR',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-TERM',
                    'CE-FUCA'
                ]
            ],
            [
                'name' => 'Les Miserables',
                'key' => 'NO-LEMI',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-SLAV',
                    'RS-MODI'
                ]
            ],
            [
                'name' => 'Overlord',
                'key' => 'NO-OVER',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-NOBU',
                    'RS-MASA'
                ]
            ],
            [
                'name' => 'BOOM',
                'key' => 'NO-BOOM',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'CE-EXPU',
                    null
                ]
            ],
            [
                'name' => 'Resurgent',
                'key' => 'NO-RESU',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-SKLO',
                    'RS-PHAR'
                ]
            ],
            [
                'name' => 'Mummy Research',
                'key' => 'NO-MURE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-ARCH',
                    'RS-PHAR'
                ]
            ],
            [
                'name' => 'Jade Carving',
                'key' => 'NO-JACA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-SCUL',
                    'RS-JEWE'
                ]
            ],
            [
                'name' => 'Circus',
                'key' => 'NO-CIRC',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-MAMM',
                    null
                ]
            ],
            [
                'name' => 'Armored Champion',
                'key' => 'NO-ARCH',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ARMO',
                    'AB-HOWA'
                ]
            ],
            [
                'name' => 'Octopus',
                'key' => 'NO-OCTO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-KRCA',
                    null
                ]
            ],
            [
                'name' => 'War Weapon',
                'key' => 'NO-WAWE',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-ZERO',
                    'CE-MAHE'
                ]
            ],
            [
                'name' => 'Cleric',
                'key' => 'NO-CLER',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-SAGE',
                    'AR-WHCB'
                ]
            ],
            [
                'name' => 'One Man Army',
                'key' => 'NO-ONMA',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-ZEQU',
                    'AR-CHEC'
                ]
            ],
            [
                'name' => 'Eastern Mythology',
                'key' => 'NO-EAMY',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AB-MOKI',
                    'RS-NALA'
                ]
            ],
            [
                'name' => 'Eye of Destruction',
                'key' => 'NO-EYOD',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-MEDU',
                    'CE-THKI'
                ]
            ],
            [
                'name' => 'Space Time Manipulator',
                'key' => 'NO-SPTM',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-TIWI',
                    'CE-FUCA'
                ]
            ],
            [
                'name' => 'Plane Source',
                'key' => 'NO-PLSO',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'AR-CREA',
                    'AR-TIWI'
                ]
            ],
            [
                'name' => 'Space Traveller',
                'key' => 'NO-SPTR',
                'description' => null,
                'image' => null,
                'gumballs' => [
                    'RS-AUTO',
                    'AB-ALIE'
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
                            'group_id' => DB::table('groups')->where('key', '=', 'NO')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );

            FateGumballsTableSeeder::runExternally($fate['key'], $gumballs);
        }
    }
}
