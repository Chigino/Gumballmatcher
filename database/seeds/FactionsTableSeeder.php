<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factions')
            ->truncate();

        $factions = [
            [
                'name' => 'Aoluwei\'s Blade',
                'key' => 'AB',
                'description' => '"War Empire Aoluwei" is at the center of the entire Erathia, this is a warlike nation, and their comprehension towards fighting skills is incomparable. The greatest fighter in history—Nikolas, was born here. Nikolas singlehandedly killed a demon dragon from the abyss. The former fighter chief of Aoluwei is Thodius, the only crusade leader who successfully defeated the abyss troop. "We believe, every knight likes to sacrifice everything for their empire, and this is our belief!" Thodius erases the blood on his sword and Smiles to you. Their heroism won them a proud fame of — "Aoluwei\'s Blade".',
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/2/24/Aoluwei%27s_Blade.png/revision/latest',
            ],
            [
                'name' => 'Canas\' Enlightenment',
                'key' => 'CE',
                'description' => '"Legendary Canas" is the second largest empire following the Mechanical Empire Dacca. The southern Canas Plain and The Sea of Tree are under the domain of the Canas Empire. Canas is very rich and it has attracted many Gumballs migrating here. What\'s more, the symbol of superior honor—World Tree, is also born here. The rulers of Canas are a group of intelligent Gumballs, they are called the "Canas\' Enlightenment".',
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/a/ac/Canas%27_Enlightenment.png/revision/latest',
            ],
            [
                'name' => 'Abyss\' Roar',
                'key' => 'AR',
                'description' => '"Mechanical Empire Dacca" is the most powerful and the largest empire among the four. The whole Arctic Continent is under the domain of Dacca, whose capital is City of Steam. A group of Gumballs who control dark energy are ruling the Dacca empire; they are called "Abyss\' Roar".',
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/d/db/Abyss%27_Roar.png/revision/latest',
            ],
            [
                'name' => 'Ranger\'s Song',
                'key' => 'RS',
                'description' => '"Undead Empire Abulis" is located towards the east of the Canas continent, which is a lifeless barren land. Abulis consists of many frontier fortresses and endless deserts. For thousands of years, the Gelnider fortress and the Avallon Fortress were both controlled by the Abulis Empire, and they successfully resisted the invasion of alien races. However, it became in ruins and the home of the undead creatures. Abulis has also brought up many legendary heroes, such as Davistia, the producer of Scourge Bone Chime. For hundreds of years, the abyss troop trembled with fear of hearing of his name. There is a beautiful but unpractical fame for Abulis - "Ranger\'s Song".',
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/7/7f/Ranger%27s_Song.png/revision/latest',
            ],
        ];

        foreach ($factions as $faction) {
            DB::table('factions')
                ->updateOrInsert(
                    $faction,
                    array_merge(
                        $faction,
                        [
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
