<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tournament;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id', 'player1_id', 'player2_id', 'player1_score', 'player2_score', 'winner_id'];

    /**
     * Un match appartient à un tournoi.
     */
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    /**
     * Joueur 1 du match.
     */
    public function player1()
    {
        return $this->belongsTo(User::class, 'player1_id');
    }

    /**
     * Joueur 2 du match.
     */
    public function player2()
    {
        return $this->belongsTo(User::class, 'player2_id');
    }

    /**
     * Gagnant du match.
     */
    public function winner()
    {
        return $this->belongsTo(User::class, 'winner_id');
    }
}
