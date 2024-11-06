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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom du joueur
            $table->string('email')->unique(); // Email unique pour chaque joueur
            $table->string('password'); // Mot de passe pour se connecter à la plateforme
            $table->integer('town_hall_level'); // Niveau de l’Hôtel de Ville
            $table->integer('victories')->default(0); // Nombre de victoires
            $table->integer('stars')->default(0); // Nombre d'étoiles gagnées
            $table->string('clan_name')->nullable(); // Nom du clan (facultatif)
            $table->string('profile_image')->nullable(); // URL de l'image de profil du joueur
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
