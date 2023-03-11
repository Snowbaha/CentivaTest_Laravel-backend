<?php

namespace App\Observers;

use App\Models\Team;

class TeamSlugObserver
{
    // when create new team, check if the slug is unique
    public function creating($team)
    {
        // get the Team object with the same slug
        $teamWithSameSlug = Team::where('slug', $team->slug)->count();

        if($teamWithSameSlug > 0) {
            // generate random unique slug for team
            $team->slug = uniqid();
        }
    }
}
