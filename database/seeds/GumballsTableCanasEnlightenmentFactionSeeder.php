<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GumballsTableCanasEnlightenmentFactionSeeder extends Seeder
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
                'name' => 'Priest',
                'key' => 'CE-PRIE',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/1/14/Priest.png/revision/latest',
            ],
            [
                'name' => 'Mage',
                'key' => 'CE-MAGE',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/2/20/Mage.png/revision/latest',
            ],
            [
                'name' => 'Witch',
                'key' => 'CE-WITC',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/e/e6/Witch.png/revision/latest',
            ],
            [
                'name' => 'Merchant',
                'key' => 'CE-MERC',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/19/Merchant.png/revision/latest',
            ],
            [
                'name' => 'King',
                'key' => 'CE-KING',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/1/1d/King.png/revision/latest',
            ],
            [
                'name' => 'Soul Reaper',
                'key' => 'CE-SORE',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/4/4c/Soul_Reaper.png/revision/latest',
            ],
            [
                'name' => 'World Tree',
                'key' => 'CE-WOTR',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/3/38/World_Tree.png/revision/latest',
            ],
            [
                'name' => 'Demon Hunter',
                'key' => 'CE-DEHU',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/b/bf/Demon_Hunter.png/revision/latest',
            ],
            [
                'name' => 'Dwarves King',
                'key' => 'CE-DWKI',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/3/3b/Dwarves_King.png/revision/latest',
            ],
            [
                'name' => 'Terminator',
                'key' => 'CE-TERM',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/8/81/Terminator.png/revision/latest',
            ],
            [
                'name' => 'Machine Herald',
                'key' => 'CE-MAHE',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/2/2d/Machine_Herald.png/revision/latest',
            ],
            [
                'name' => 'Odin',
                'key' => 'CE-ODIN',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/5/58/Odin.png/revision/latest',
            ],
            [
                'name' => 'Justice Herald',
                'key' => 'CE-JUHE',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/5/52/Justice_Herald.png/revision/latest',
            ],
            [
                'name' => 'Prince',
                'key' => 'CE-PRIN',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/b/b4/Prince.png/revision/latest',
            ],
            [
                'name' => 'Genie',
                'key' => 'CE-GENI',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/8/8c/Genie.png/revision/latest',
            ],
            [
                'name' => 'Future Cat',
                'key' => 'CE-FUCA',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/f/f8/Future_Cat.png/revision/latest',
            ],
            [
                'name' => 'Cyborg',
                'key' => 'CE-CYBO',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/a/a3/Cyborg.png/revision/latest',
            ],
            [
                'name' => 'SunFlower',
                'key' => 'CE-SUFL',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/8/87/SunFlower.png/revision/latest',
            ],
            [
                'name' => 'Golden Titan',
                'key' => 'CE-GOTI',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/6/6b/Golden_Titan.png/revision/latest',
            ],
            [
                'name' => 'Poseidon',
                'key' => 'CE-POSI',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/4/43/Poseidon.png/revision/latest',
            ],
            [
                'name' => 'Red Hood',
                'key' => 'CE-REHO',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/d/da/Red_Hood.png/revision/latest',
            ],
            [
                'name' => 'Magic Boy',
                'key' => 'CE-MABO',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/0/02/Magic_Boy.png/revision/latest',
            ],
            [
                'name' => 'Explosive Pumpkin',
                'key' => 'CE-EXPU',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/8/8c/Explosive_Pumpkin.png/revision/latest',
            ],
            [
                'name' => 'Cactus',
                'key' => 'CE-CACT',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/a/a6/Cactus.png/revision/latest',
            ],
            [
                'name' => 'Faerie Dragon',
                'key' => 'CE-FADR',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/8/84/Faerie_Dragon.png/revision/latest',
            ],
            [
                'name' => 'Earth Elemental',
                'key' => 'CE-EAEL',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/8/87/Earth_Elemental.png/revision/latest',
            ],
            [
                'name' => 'Water Elemental',
                'key' => 'CE-WAEL',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/5/5d/Water_Elemental.png/revision/latest',
            ],
            [
                'name' => 'Fire Elemental',
                'key' => 'CE-FIEL',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/a/a8/Fire_Elemental.png/revision/latest',
            ],
            [
                'name' => 'Air Elemental',
                'key' => 'CE-AIEL',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/3/3f/Air_Elemental.png/revision/latest',
            ],
            [
                'name' => 'Light Elemental',
                'key' => 'CE-LIEL',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/8/88/Light_Elemental.png/revision/latest',
            ],
            [
                'name' => 'Dark Elemental',
                'key' => 'CE-DAEL',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/1c/Dark_Elemental.png/revision/latest',
            ],
            [
                'name' => 'Phoenix',
                'key' => 'CE-PHOE',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/c/c1/Phoenix.png/revision/latest',
            ],
            [
                'name' => 'Bloody Wolf',
                'key' => 'CE-BLWO',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/6/6f/Bloody_Wolf.png/revision/latest',
            ],
            [
                'name' => 'Three-eye King',
                'key' => 'CE-THKI',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/3/3e/Three-eye_King.png/revision/latest',
            ],
            [
                'name' => 'Cupid',
                'key' => 'CE-CUPI',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/0/06/Cupid.png/revision/latest',
            ],
            [
                'name' => 'Fallen Angel',
                'key' => 'CE-FAAN',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/1d/Fallen_Angel.png',
            ],
        ];

        foreach ($gumballs as $gumball) {
            DB::table('gumballs')
                ->updateOrInsert(
                    $gumball,
                    array_merge(
                        $gumball,
                        [
                            'faction_id' => DB::table('factions')->where('key', '=', 'CE')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
