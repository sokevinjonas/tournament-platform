<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Admin;
use App\Models\Joueur;
use App\Models\Matche;
use App\Models\District;
use App\Models\Moderateur;
use App\Models\UserGameStat;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'profile_image', 'role'];

     // Méthode de création statique pour chaque type d'utilisateur
     public static function createUser(array $attributes)
     {
         // Crée une instance du bon modèle selon le type
         switch ($attributes['type']) {
             case 'Admin':
                 return Admin::create($attributes);
             case 'Moderateur':
                 return Moderateur::create($attributes);
             case 'Joueur':
                 return Joueur::create($attributes);
             default:
                 throw new \Exception("Type d'utilisateur non valide");
         }
     }

    public function gameStats()
    {
        return $this->hasMany(UserGameStat::class);
    }
    /**
     * Tous les matchs où l'utilisateur est Joueur 1.
     */
    public function matchesAsPlayer1()
    {
        return $this->hasMany(Matche::class, 'player1_id');
    }

    /**
     * Tous les matchs où l'utilisateur est Joueur 2.
     */
    public function matchesAsPlayer2()
    {
        return $this->hasMany(Matche::class, 'player2_id');
    }

    /**
     * Tous les matchs gagnés par cet utilisateur.
     */
    public function matchesWon()
    {
        return $this->hasMany(Matche::class, 'winner_id');
    }

    /**
     * Tous les matchs auxquels l'utilisateur a participé (en combinant player1 et player2).
     */
    public function matches()
    {
        return $this->matchesAsPlayer1->merge($this->matchesAsPlayer2);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
