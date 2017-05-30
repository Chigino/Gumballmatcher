<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GumballsTableAbyssRoarFactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gumballs = [
            [
                'name' => 'Vampire',
                'key' => 'AR-VAMP',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/4/4e/Vampire.png/revision/latest',
            ],
            [
                'name' => 'Death Knight',
                'key' => 'AR-DEKN',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/3/32/Death_Knight.png/revision/latest',
            ],
            [
                'name' => 'Demon',
                'key' => 'AR-DEMO',
                'description'=> null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/c/c4/Demon.png/revision/latest',
            ],
            [
                'name' => 'Red Dragon',
                'key' => 'AR-REDR',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/9/95/Red_Dragon.png/revision/latest',
            ],
            [
                'name' => 'Magic Golem',
                'key' => 'AR-MAGO',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/8/84/Magic_Golem.png/revision/latest',
            ],
            [
                'name' => 'Hellfire',
                'key' => 'AR-HELL',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/4/4e/Hellfire.png/revision/latest',
            ],
            [
                'name' => 'Pharmacist',
                'key' => 'AR-PHAR',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/a/a9/Pharmacist.png/revision/latest',
            ],
            [
                'name' => 'Destroyer',
                'key' => 'AR-DEST',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/3/3a/Destroyer.png/revision/latest',
            ],
            [
                'name' => 'Creator',
                'key' => 'AR-CREA',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/7/76/Creator.png/revision/latest',
            ],
            [
                'name' => 'Medusa',
                'key' => 'AR-MEDU',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/c/c3/Medusa.png/revision/latest',
            ],
            [
                'name' => 'Time Wizard',
                'key' => 'AR-TIWI',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/b/b9/Time_Wizard.png/revision/latest',
            ],
            [
                'name' => 'Predator',
                'key' => 'AR-PRED',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/e/e9/Predator.png/revision/latest',
            ],
            [
                'name' => 'Dark Dragon',
                'key' => 'AR-DADR',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/3/33/Dark_Dragon.png/revision/latest',
            ],
            [
                'name' => 'Captain',
                'key' => 'AR-CAPT',
                'description'=> null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/a/a9/Captain.png/revision/latest',
            ],
            [
                'name' => 'Commandos',
                'key' => 'AR-COMM',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/f/f6/Commandos.png/revision/latest',
            ],
            [
                'name' => 'Templar',
                'key' => 'AR-TEMP',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/0/0e/Templar.png/revision/latest',
            ],
            [
                'name' => 'Black Warrior',
                'key' => 'AR-BLWA',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/d/d4/Black_Warrior.png/revision/latest',
            ],
            [
                'name' => 'Lich King',
                'key' => 'AR-LIKI',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/3/31/Lich_King.png/revision/latest',
            ],
            [
                'name' => 'Vampire Hunter',
                'key' => 'AR-VAHU',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/c/c8/Vampire_Hunter.png/revision/latest',
            ],
            [
                'name' => 'Hades',
                'key' => 'AR-HADE',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/6/64/Hades.png/revision/latest',
            ],
            [
                'name' => 'Claw',
                'key' => 'AR-CLAW',
                'description'=> null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/4/47/Claw.png/revision/latest',
            ],
            [
                'name' => 'Checkers',
                'key' => 'AR-CHEC',
                'description'=> null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/c/cc/Checkers.png/revision/latest',
            ],
            [
                'name' => 'Shadow Assassin',
                'key' => 'AR-SHAS',
                'description'=> null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/8/8a/Shadow_Assassin.png/revision/latest',
            ],
            [
                'name' => 'Skeleton Lord',
                'key' => 'AR-SKLO',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/b/bf/Skeleton_Lord.png/revision/latest',
            ],
            [
                'name' => 'Black & White Queen',
                'key' => 'AR-BLWQ',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/d/d6/Black_%26_White_Queen.png/revision/latest',
            ],
            [
                'name' => 'White Chess Bishop',
                'key' => 'AR-WHCB',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/7/7b/White_Chess_Bishop.png/revision/latest',
            ],
            [
                'name' => 'NO.1 Mutant',
                'key' => 'AR-NO1M',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/b/bd/NO.1_Mutant.png/revision/latest',
            ],
            [
                'name' => 'NO.2 Mutant',
                'key' => 'AR-NO2M',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/7/7d/NO.2_Mutant.png/revision/latest',
            ],
            [
                'name' => 'NO.3 Mutant',
                'key' => 'AR-NO3M',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/a/a4/NO.3_Mutant.png/revision/latest',
            ],
            [
                'name' => 'NO.4 Mutant',
                'key' => 'AR-NO4M',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/4/48/NO.4_Mutant.png/revision/latest',
            ],
            [
                'name' => 'NO.5 Mutant',
                'key' => 'AR-NO5M',
                'description'=> null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/f/fe/NO.5_Mutant.png/revision/latest',
            ],
            [
                'name' => 'Cosmic Godfather',
                'key' => 'AR-COGO',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/2/23/Cosmic_Godfather.png/revision/latest',
            ],
            [
                'name' => 'Sculptor',
                'key' => 'AR-SCUL',
                'description'=> null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/5/53/Sculptor.png/revision/latest',
            ],
            [
                'name' => 'Gumiho',
                'key' => 'AR-GUMI',
                'description'=> null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/1a/Gumiho.png/revision/latest',
            ],
            [
                'name' => 'Frost Queen',
                'key' => 'AR-FRQU',
                'description'=> null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/0/06/Frost_Queen.png/revision/latest',
            ],
        ];

        foreach ($gumballs as $gumball) {
            DB::table('gumballs')
                ->updateOrInsert(
                    $gumball,
                    array_merge(
                        $gumball,
                        [
                            'faction_id' => DB::table('factions')->where('key', '=', 'AR')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
