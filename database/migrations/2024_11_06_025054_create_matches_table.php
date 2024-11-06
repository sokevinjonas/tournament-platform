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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_id')->constrained()->onDelete('cascade'); // Association avec le tournoi
            $table->unsignedBigInteger('player1_id'); // ID du premier joueur
            $table->unsignedBigInteger('player2_id'); // ID du second joueur
            $table->integer('player1_score')->nullable(); // Score du premier joueur
            $table->integer('player2_score')->nullable(); // Score du second joueur
            $table->integer('winner_id')->nullable(); // ID du gagnant
            $table->timestamps();

            // Clés étrangères pour player1_id et player2_id
            $table->foreign('player1_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('player2_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
