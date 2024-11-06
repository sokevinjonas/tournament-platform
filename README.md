# 🛡️ Clash of Clans Tournament Platform

Bienvenue sur la plateforme de tournoi Clash of Clans, une application Laravel pour organiser des compétitions de Clash of Clans où les joueurs peuvent s'inscrire, être répartis dans des districts en fonction de leur niveau, et progresser à travers des étapes éliminatoires jusqu'à la finale.

## 📝 Table des matières

-   [À propos du projet](#à-propos-du-projet)
-   [Fonctionnalités](#fonctionnalités)
-   [Technologies utilisées](#technologies-utilisées)
-   [Prérequis](#prérequis)
-   [Installation](#installation)
-   [Utilisation](#utilisation)
-   [Architecture de la base de données](#architecture-de-la-base-de-données)
-   [Contribuer](#contribuer)
-   [Licence](#licence)

## À propos du projet

Ce projet est une plateforme permettant l'organisation de mini-tournois pour le jeu **Clash of Clans**. Chaque tournoi regroupe les joueurs par niveau d'Hôtel de Ville dans des "Districts" et les fait s'affronter à travers des phases de tournoi éliminatoires. À chaque étape, les meilleurs joueurs avancent, et le joueur gagnant de chaque District devient le **Héros**.

## Fonctionnalités

-   **Invitation à la Guerre** : Les joueurs remplissent un formulaire d'inscription pour rejoindre un tournoi.
-   **Répartition des Guerriers** : Les joueurs sont assignés à des districts en fonction de leur niveau de HDV (Hôtel de Ville).
-   **Districts** : Les joueurs sont regroupés dans des districts selon leur niveau de HDV (HDV 10, HDV 11, etc.), chaque district ayant un maximum de 20 joueurs.
-   **Tournoi** : Les joueurs avancent à travers des étapes éliminatoires (qualification, quarts de finale, demi-finale, finale).
-   **Classement** : Les joueurs sont classés selon leurs victoires et le nombre d'étoiles gagnées.
-   **Héros** : Le gagnant final de chaque district est couronné Héros.

## Technologies utilisées

-   **Backend** : PHP, [Laravel](https://laravel.com)
-   **Frontend** : HTML, CSS, [Bootstrap](https://getbootstrap.com)
-   **Base de données** : MySQL

## Prérequis

-   **PHP** version 8.x ou plus
-   **Composer**
-   **Node.js** et **npm**
-   **MySQL** pour la base de données

## Installation

1. **Cloner le dépôt**

    ```bash
    git clone https://github.com/votre_nom_utilisateur/nom_du_projet.git
    cd nom_du_projet
    ```

2. **Configurer l'environnement**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

3. **Migrer la base de données**

    ```bash
    php artisan migrate
    ```

4. **Lancer le serveur**

    ```bash
    php artisan serve
    ```
