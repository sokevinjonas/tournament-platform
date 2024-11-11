@extends('layouts.admin-app')
@section('title', 'Accueil')
@section('content')
<!-- Main Dashboard Container -->
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col">
            <h1 class="display-4 mb-2">Tableau de Bord</h1>
            <p class="text-muted">Bienvenue sur votre espace personnel</p>
        </div>
    </div>

    <!-- Dashboard Cards -->
    <div class="row g-4">
        <!-- Prochains Matchs -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Prochains Matchs</h5>
                    <span class="badge bg-primary">À venir</span>
                </div>
                <div class="card-body">
                    <p class="card-text text-muted mb-4">Aperçu des matchs à venir.</p>
                    <!-- Match Item -->
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-light p-2 me-3">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Équipe A vs Équipe B</h6>
                                        <small class="text-muted">Stade Municipal</small>
                                    </div>
                                </div>
                                <small class="text-muted">Dans 2 jours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Voir tous les matchs</a>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Statistiques</h5>
                    <span class="badge bg-success">En direct</span>
                </div>
                <div class="card-body">
                    <p class="card-text text-muted mb-4">Points, victoires et étoiles gagnées.</p>
                    <div class="row text-center">
                        <div class="col">
                            <h3 class="text-primary mb-0">25</h3>
                            <small class="text-muted">Points</small>
                        </div>
                        <div class="col">
                            <h3 class="text-success mb-0">12</h3>
                            <small class="text-muted">Victoires</small>
                        </div>
                        <div class="col">
                            <h3 class="text-warning mb-0">8</h3>
                            <small class="text-muted">Étoiles</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Détails complets</a>
                </div>
            </div>
        </div>

        <!-- Notifications -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Notifications</h5>
                    <span class="badge bg-danger">3 nouvelles</span>
                </div>
                <div class="card-body">
                    <p class="card-text text-muted mb-4">Dernières annonces de la plateforme.</p>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item border-start border-4 border-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Nouveau tournoi disponible !</h6>
                                    <small class="text-muted">Inscriptions ouvertes jusqu'au 20 mars</small>
                                </div>
                                <small class="text-muted">Il y a 1h</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Toutes les notifications</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
