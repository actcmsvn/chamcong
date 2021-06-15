<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'id'    => 1,
                'user_id' => 1,
                'name' => 'Admin',
                'personal_team' => 1,
            ],
            [
                'id'    => 2,
                'user_id' => 2,
                'name' => 'User',
                'personal_team' => 1,
            ],
        ];

        Team::insert($teams);
    }
}