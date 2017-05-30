<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->truncate();

        $users = [
            [
                'name' => 'Brad',
                'email' => 'bradcornford@hotmail.co.uk',
                'username' => 'cornfordb69',
                'password' => bcrypt('P4ssw0rd!'),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')
                ->updateOrInsert(
                    $user,
                    array_merge(
                        $user,
                        [
                            'alliance_id' => DB::table('alliances')->where('key', '=', 'SKYPR')->first()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]
                    )
                );
        }
    }
}
