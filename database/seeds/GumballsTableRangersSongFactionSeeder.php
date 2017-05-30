<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GumballsTableRangersSongFactionSeeder extends Seeder
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
                'name' => 'Bandit',
                'key' => 'RS-BAND',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/1/1f/Bandit.png/revision/latest',
            ],
            [
                'name' => 'Minstrel',
                'key' => 'RS-MINS',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/6/66/Minstrel.png/revision/latest',
            ],
            [
                'name' => 'Bounty Hunter',
                'key' => 'RS-BOHU',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/1d/Bounty_Hunter.png/revision/latest',
            ],
            [
                'name' => 'Zeros',
                'key' => 'RS-ZERO',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/13/Zeros.png/revision/latest',
            ],
            [
                'name' => 'Divine Dragon',
                'key' => 'RS-DIDR',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/6/67/Divine_Dragon.png/revision/latest',
            ],
            [
                'name' => 'Musashi',
                'key' => 'RS-MUSA',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/4/45/Musashi.png/revision/latest',
            ],
            [
                'name' => 'Crusader',
                'key' => 'RS-CRUS',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/e/eb/Crusader.png/revision/latest',
            ],
            [
                'name' => 'Tarot',
                'key' => 'RS-TARO',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/4/45/Tarot.png/revision/latest',
            ],
            [
                'name' => 'Ghost Captain',
                'key' => 'RS-GHCA',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/c/c0/Ghost_Captain.png/revision/latest',
            ],
            [
                'name' => 'Kaito',
                'key' => 'RS-KAIT',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/9/92/Kaito.png/revision/latest',
            ],
            [
                'name' => 'Panda',
                'key' => 'RS-PAND',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/0/00/Panda.png/revision/latest',
            ],
            [
                'name' => 'Sage',
                'key' => 'RS-SAGE',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/f/f8/Sage.png/revision/latest',
            ],
            [
                'name' => 'Slave',
                'key' => 'RS-SLAV',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/e/e4/Slave.png/revision/latest',
            ],
            [
                'name' => 'Commander',
                'key' => 'RS-COMM',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/2/2e/Commander.png/revision/latest',
            ],
            [
                'name' => 'Apollo',
                'key' => 'RS-APOL',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/1/14/Apollo.png/revision/latest',
            ],
            [
                'name' => 'Archaeologist',
                'key' => 'RS-ARCH',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/5/5a/Archaeologist.png/revision/latest',
            ],
            [
                'name' => 'Autobots',
                'key' => 'RS-AUTO',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/7/79/Autobots.png/revision/latest',
            ],
            [
                'name' => 'Modificator',
                'key' => 'RS-MODI',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/e/e3/Modificator.png/revision/latest',
            ],
            [
                'name' => 'Nobunaga',
                'key' => 'RS-NOBU',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/1/19/Nobunaga.png/revision/latest',
            ],
            [
                'name' => 'Masamune',
                'key' => 'RS-MASA',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/1/1b/Masamune.png/revision/latest',
            ],
            [
                'name' => 'Kraken Captain',
                'key' => 'RS-KRCA',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/d/d9/Kraken_Captain.png/revision/latest',
            ],
            [
                'name' => 'Lionheart King',
                'key' => 'RS-LIKI',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/5/5d/Lionheart_King.png/revision/latest',
            ],
            [
                'name' => 'Saladin',
                'key' => 'RS-SALA',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/2/2d/Saladin.png/revision/latest',
            ],
            [
                'name' => 'Starmoon Scholar',
                'key' => 'RS-STSC',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/c/c6/Starmoon_Scholar.png/revision/latest',
            ],
            [
                'name' => 'Pharaoh',
                'key' => 'RS-PHAR',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/2/26/Pharaoh.png/revision/latest',
            ],
            [
                'name' => 'Mammoth',
                'key' => 'RS-MAMM',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/a/a5/Mammoth.png/revision/latest',
            ],
            [
                'name' => 'Peter',
                'key' => 'RS-PETE',
                'description' => null,
                'image' => 'https://vignette4.wikia.nocookie.net/gdmaze/images/9/91/Peter.png/revision/latest',
            ],
            [
                'name' => 'Jeweler',
                'key' => 'RS-JEWE',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/c/c0/Jeweler.png/revision/latest',
            ],
            [
                'name' => 'Nalakuvara',
                'key' => 'RS-NALA',
                'description' => null,
                'image' => 'https://vignette3.wikia.nocookie.net/gdmaze/images/e/e6/Nalakuvara.png/revision/latest',
            ],
            [
                'name' => 'Nelson',
                'key' => 'RS-NELS',
                'description' => null,
                'image' => 'https://vignette2.wikia.nocookie.net/gdmaze/images/0/03/Nelson.png/revision/latest',
            ],
            [
                'name' => 'Merman',
                'key' => 'RS-MERM',
                'description' => null,
                'image' => 'https://vignette1.wikia.nocookie.net/gdmaze/images/e/e1/Merman.png/revision/latest',
            ],
        ];

        foreach ($gumballs as $gumball) {
            DB::table('gumballs')
                ->updateOrInsert(
                    $gumball,
                    array_merge(
                        $gumball,
                        [
                            'faction_id' => DB::table('factions')->where('key', '=', 'RS')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
