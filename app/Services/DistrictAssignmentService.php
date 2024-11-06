<?php

# 1. Services - Logique Métier

namespace App\Services;

use App\Models\User;
use App\Models\District;

// Service de répartition des districts
class DistrictAssignmentService
{

    /**
     * Assigner un joueur à un district en fonction de son niveau HDV.
     *
     * @param User $user
     * @return District|null
     */
    public function assignToDistrict(User $user)
    {
        // On récupère le district correspondant au niveau HDV du joueur
        $district = District::where('level', $user->town_hall_level)
            ->where('participants_count', '<', District::MAX_PARTICIPANTS)
            ->first();

        // Si un district est trouvé avec de la place disponible
        if ($district) {
            $district->participants_count += 1;
            $district->save();

            // Ajouter le joueur au district (ex : via une relation many-to-many)
            $district->users()->attach($user->id);
            return $district;
        }

        return null;
    }
}
