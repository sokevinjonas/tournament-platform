<?php

# 1. Services - Logique Métier

namespace App\Services;

use App\Models\User;
use App\Models\District;

// Service de répartition des districts
class DistrictAssignmentService
{

    // Logique pour assigner un district à un joueur
    // basée sur son niveau d'HDV et le nombre de joueurs par district
    public function assignDistrict(User $user)
    {
        $townHallLevel = $user->town_hall_level;

        // Trouver un district approprié basé sur le niveau HDV
        $district = District::where('min_town_hall_level', '<=', $townHallLevel)
            ->where('max_town_hall_level', '>=', $townHallLevel)
            ->withCount('users')
            ->having('users_count', '<', 50) // Maximum 50 joueurs par district
            ->orderBy('users_count', 'asc')
            ->first();

        if (!$district) {
            // Créer un nouveau district si nécessaire
            $district = District::create([
                'name' => 'District ' . Str::random(5),
                'min_town_hall_level' => $townHallLevel - 1,
                'max_town_hall_level' => $townHallLevel + 1
            ]);
        }

        $user->district()->associate($district);
        $user->save();

        return $district;
    }
}
