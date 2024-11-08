<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Exception;

class UserService
{
    // Création d'un utilisateur (Joueur, Moderateur, ou Admin)
    public function storeUser(User $data)
    {
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'profile_image' => $data['profile_image'] ?? null,
                'role' => $data['role'],
            ]);

            return $user;
        } catch (Exception $e) {
            Log::error("Erreur lors de la création de l'utilisateur: " . $e->getMessage());
            return null;
        }
    }

    // Mise à jour d'un utilisateur
    public function updateUser(User $user, array $data)
    {
        try {
            if (isset($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            }

            $user->update($data);
            return $user;
        } catch (Exception $e) {
            Log::error("Erreur lors de la mise à jour de l'utilisateur: " . $e->getMessage());
            return null;
        }
    }

    // Suppression d'un utilisateur
    public function deleteUser(User $user)
    {
        try {
            return $user->delete();
        } catch (Exception $e) {
            Log::error("Erreur lors de la suppression de l'utilisateur: " . $e->getMessage());
            return false;
        }
    }
}
