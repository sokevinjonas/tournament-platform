@extends('layouts.admin-app')

@section('title', 'Accueil')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Tableau de Bord</h1>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Prochains Matchs</h5>
                    <p class="card-text">Aperçu des matchs à venir.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistiques</h5>
                    <p class="card-text">Points, victoires et étoiles gagnées.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <p class="card-text">Dernières annonces de la plateforme.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
