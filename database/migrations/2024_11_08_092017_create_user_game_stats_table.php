<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_game_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Référence à l'utilisateur
            $table->string('game'); // Nom du jeu, par exemple "Clash of Clans"
            $table->integer('level')->nullable(); // Niveau spécifique au jeu, ex : Hôtel de Ville pour Clash of Clans
            $table->integer('victories')->default(0); // Nombre de victoires
            $table->integer('stars')->default(0); // Nombre d'étoiles gagnées
            $table->string('clan_name')->nullable(); // Nom du clan (facultatif)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_game_stats');
    }
};
