<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private const TEAMS = 3;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Team::factory(self::TEAMS)->create();

        // Création de 4 membres par équipe
        for($i = 1; $i <= self::TEAMS; $i++) {
            User::factory(4)->create([
                'team_id' =>  Team::find($i),
            ]);
        }

    }
}
