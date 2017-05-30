<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GumballsTableAoluweisBladeFactionSeeder extends Seeder
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
                'name' => 'Adventurer',
                'key' => 'AB-ADVE',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/c/cc/Adventurer.png/revision/latest',
            ],
            [
                'name' => 'Swordsman',
                'key' => 'AB-SWOR',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/5/5a/Swordsman.png/revision/latest',
            ],
            [
                'name' => 'Gladiator',
                'key' => 'AB-GLAD',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/4/44/Gladiator.png/revision/latest',
            ],
            [
                'name' => 'Machinist',
                'key' => 'AB-MACH',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/e/e0/Machinist.png/revision/latest',
            ],
            [
                'name' => 'Alchemist',
                'key' => 'AB-ALCH',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/5/5b/Alchemist.png/revision/latest',
            ],
            [
                'name' => 'Pirate',
                'key' => 'AB-PIRA',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/7/7d/Pirate.png/revision/latest',
            ],
            [
                'name' => 'Monkey King',
                'key' => 'AB-MOKI',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/f/f4/Monkey_King.png/revision/latest',
            ],
            [
                'name' => 'Warrior',
                'key' => 'AB-WARR',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/9/97/Warrior.png/revision/latest',
            ],
            [
                'name' => 'Night Knight',
                'key' => 'AB-NIKN',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/f/f5/Night_Knight.png/revision/latest',
            ],
            [
                'name' => 'Armor',
                'key' => 'AB-ARMO',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/0/06/Armor.png/revision/latest',
            ],
            [
                'name' => 'Holy Warrior',
                'key' => 'AB-HOWA',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/2/2f/Holy_Warrior.png/revision/latest',
            ],
            [
                'name' => 'Blacksmith',
                'key' => 'AB-BLAC',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/b/be/Blacksmith.png/revision/latest',
            ],
            [
                'name' => 'Sorcerer',
                'key' => 'AB-SORC',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/2/27/Sorcerer.png/revision/latest',
            ],
            [
                'name' => 'Zorro',
                'key' => 'AB-ZORR',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/d/db/Zorro.png/revision/latest',
            ],
            [
                'name' => 'Guardian',
                'key' => 'AB-GUAR',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/f/fd/Guardian.png/revision/latest',
            ],
            [
                'name' => 'Hercules',
                'key' => 'AB-HERC',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/7/76/Hercules.png/revision/latest',
            ],
            [
                'name' => 'Zerg Queen',
                'key' => 'AB-ZEQU',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/a/ad/Zerg_Queen.png/revision/latest',
            ],
            [
                'name' => 'Athena',
                'key' => 'AB-ATHE',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/6/68/Athena.png/revision/latest',
            ],
            [
                'name' => 'Spartan',
                'key' => 'AB-SPAR',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/e/e6/Spartan.png/revision/latest',
            ],
            [
                'name' => 'Condottiere',
                'key' => 'AB-COND',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/d/d4/Condottiere.png/revision/latest',
            ],
            [
                'name' => 'Holy Dragon',
                'key' => 'AB-HODR',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/8/82/Holy_Dragon.png/revision/latest',
            ],
            [
                'name' => 'Pinocchio',
                'key' => 'AB-PINO',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/f/f5/Pinocchio.png/revision/latest',
            ],
            [
                'name' => 'Spy',
                'key' => 'AB-SPY',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/3/36/Spy.png/revision/latest',
            ],
            [
                'name' => 'Duelist',
                'key' => 'AB-DUEL',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/5/55/Duelist.png/revision/latest',
            ],
            [
                'name' => 'Angel Deity',
                'key' => 'AB-ANDE',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/3/31/Angel_Deity.png/revision/latest',
            ],
            [
                'name' => 'Butcher',
                'key' => 'AB-BUTC',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/f/fb/Butcher.png/revision/latest',
            ],
            [
                'name' => 'Blue Shark',
                'key' => 'AB-BLSH',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/9/9f/Blue_Shark.png/revision/latest',
            ],
            [
                'name' => 'Snowman',
                'key' => 'AB-SNOW',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/c/c7/Snowman.png/revision/latest',
            ],
            [
                'name' => 'High Priest',
                'key' => 'AB-HIPR',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/a/ab/High_Priest.png/revision/latest',
            ],
            [
                'name' => 'Heavenly King',
                'key' => 'AB-HEKI',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/2/2b/Heavenly_King.png/revision/latest',
            ],
            [
                'name' => 'Little May',
                'key' => 'AB-LIMA',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/9/90/Little_May.png/revision/latest',
            ],
            [
                'name' => 'Alien',
                'key' => 'AB-ALIE',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/1/12/Alien.png/revision/latest',
            ],
        ];

        foreach ($gumballs as $gumball) {
            DB::table('gumballs')
                ->updateOrInsert(
                    $gumball,
                    array_merge(
                        $gumball,
                        [
                            'faction_id' => DB::table('factions')->where('key', '=', 'AB')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
