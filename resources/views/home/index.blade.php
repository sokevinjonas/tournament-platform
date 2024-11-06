 {{-- Page d'accueil - resources/views/home/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Rejoignez l'Arène et Recevez Votre Invitation à la Guerre</h1>
            <a href="{{ route('registration.create') }}" class="btn cta-button">
                <i class="fas fa-sword-cross me-2"></i>
                Inscrivez-vous maintenant
            </a>
        </div>
    </section>
    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-fort-awesome feature-icon"></i>
                            <h3 class="feature-title">Rejoindre un District</h3>
                            <p class="card-text">Intégrez l'un de nos Districts exclusifs et affrontez des adversaires de votre niveau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-users-crown feature-icon"></i>
                            <h3 class="feature-title">Répartition des Guerriers</h3>
                            <p class="card-text">Participez à la répartition stratégique et découvrez votre place dans la bataille.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-trophy feature-icon"></i>
                            <h3 class="feature-title">Tournois Épiques</h3>
                            <p class="card-text">Affrontez les meilleurs guerriers et gravissez les échelons vers la gloire.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
