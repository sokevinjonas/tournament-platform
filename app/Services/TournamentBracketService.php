<?php

use App\Models\Matche;
use App\Models\Tournament;
// Service de gestion des tournois
class TournamentBracketService
{
    // Logique pour créer les brackets du tournoi
    // et organiser les matches
    public function createBracket(District $district)
    {
        $players = $district->users()->inRandomOrder()->get();
        $tournament = Tournament::create([
            'district_id' => $district->id,
            'status' => 'in_progress'
        ]);

        // Création des matches de premier tour
        $matchPairs = $players->chunk(2);
        foreach ($matchPairs as $pair) {
            if ($pair->count() === 2) {
                Matche::create([
                    'tournament_id' => $tournament->id,
                    'player1_id' => $pair[0]->id,
                    'player2_id' => $pair[1]->id,
                    'round' => 1
                ]);
            }
        }

        return $tournament;
    }
}
