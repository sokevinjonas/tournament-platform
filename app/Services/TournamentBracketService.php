<?php

use App\Models\Matche;
use App\Models\Tournament;
// Service de gestion des tournois
class TournamentBracketService
{
     /**
     * Générer les poules pour un district donné.
     *
     * @param District $district
     * @return Tournament
     */
    public function createTournamentBracket(District $district)
    {
        // Créer un tournoi pour le district
        $tournament = Tournament::create([
            'name' => "Tournoi pour " . $district->name,
            'district_id' => $district->id,
            'round' => 1
        ]);

        // Assigner les participants au tournoi (poule de 20 maximum)
        $participants = $district->users()->limit(20)->get();

        // Générer des matchs de manière aléatoire entre les participants
        for ($i = 0; $i < count($participants); $i += 2) {
            if (isset($participants[$i + 1])) {
                Matche::create([
                    'tournament_id' => $tournament->id,
                    'player1_id' => $participants[$i]->id,
                    'player2_id' => $participants[$i + 1]->id,
                ]);
            }
        }

        return $tournament;
    }

    /**
     * Processus d’élimination pour réduire les participants.
     *
     * @param Tournament $tournament
     * @return void
     */
    public function processElimination(Tournament $tournament)
    {
        // Récupérer les gagnants de chaque match
        $winners = $tournament->matches()->whereNotNull('winner_id')->pluck('winner_id');

        // Sélectionner les 15 premiers pour les demi-finales (par exemple)
        $remainingParticipants = $winners->take(15);

        // Générer les demi-finales
        $nextRound = $tournament->round + 1;
        foreach ($remainingParticipants->chunk(2) as $pair) {
            if (count($pair) === 2) {
                Matche::create([
                    'tournament_id' => $tournament->id,
                    'player1_id' => $pair[0],
                    'player2_id' => $pair[1],
                    'round' => $nextRound,
                ]);
            }
        }

        // Mettre à jour le tournoi pour le prochain round
        $tournament->round = $nextRound;
        $tournament->save();
    }
}
