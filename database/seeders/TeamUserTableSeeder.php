<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TeamUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_user')->insert(
            [
            'id' => 1,
            'team_id' => 1,
            'user_id' => 1,
            'role' => 'Admin',
            ],
            [
            'id' => 2,
            'team_id' => 2,
            'user_id' => 3,
            'role' => 'User',
            ]
        );
    }
}