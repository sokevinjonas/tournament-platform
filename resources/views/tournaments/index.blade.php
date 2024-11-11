@extends('layouts.admin-app')
@section('content')
<div class="container py-4">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col">
            <h1 class="display-5 mb-3">Gestion des Tournois</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tournois</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Active Tournaments Section -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Tournois Actifs</h4>
            <button class="btn btn-light btn-sm">
                <i class="bi bi-plus-circle me-1"></i>Nouveau Tournoi
            </button>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">District HDV 10 - Tournoi Mai 2024</h5>
                            <p class="mb-1 text-muted">
                                <i class="bi bi-calendar-event me-2"></i>01/05/2024 - 31/05/2024
                            </p>
                        </div>
                        <div>
                            <span class="badge bg-success me-2">En cours</span>
                            <span class="badge bg-secondary">24 participants</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">District HDV 11 - Tournoi Mai 2024</h5>
                            <p class="mb-1 text-muted">
                                <i class="bi bi-calendar-event me-2"></i>01/05/2024 - 31/05/2024
                            </p>
                        </div>
                        <div>
                            <span class="badge bg-warning me-2">Inscriptions</span>
                            <span class="badge bg-secondary">12 participants</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Tournament History Section -->
    <div class="card">
        <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Historique des Tournois</h4>
            <div class="btn-group">
                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Filtrer par date
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Tous</a></li>
                    <li><a class="dropdown-item" href="#">2024</a></li>
                    <li><a class="dropdown-item" href="#">2023</a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nom du Tournoi</th>
                            <th>Date</th>
                            <th>Participants</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>District HDV 10 - Tournoi Mars 2024</td>
                            <td>01/03/2024 - 31/03/2024</td>
                            <td>32</td>
                            <td><span class="badge bg-secondary">Terminé</span></td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-eye me-1"></i>Détails
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>District HDV 11 - Tournoi Février 2024</td>
                            <td>01/02/2024 - 28/02/2024</td>
                            <td>28</td>
                            <td><span class="badge bg-secondary">Terminé</span></td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-eye me-1"></i>Détails
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <nav aria-label="Tournament history pagination" class="mt-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Précédent</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
