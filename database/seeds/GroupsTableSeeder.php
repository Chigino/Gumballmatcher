<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')
            ->truncate();

        $groups = [
            [
                'name' => 'Normal',
                'key' => 'NO',
                'description' => null,
                'image' => null,
            ],
            [
                'name' => 'Intimacy',
                'key' => 'IN',
                'description' => null,
                'image' => null,
            ],
            [
                'name' => 'Legacy',
                'key' => 'LE',
                'description' => null,
                'image' => null,
            ],
            [
                'name' => 'Arch Rival',
                'key' => 'AR',
                'description' => null,
                'image' => null,
            ],
            [
                'name' => 'The Lovers',
                'key' => 'TL',
                'description' => null,
                'image' => null,
            ],
        ];

        foreach ($groups as $group) {
            DB::table('groups')
                ->updateOrInsert(
                    $group,
                    array_merge(
                        $group,
                        [
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
