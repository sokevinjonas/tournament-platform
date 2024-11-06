{{-- Page d'inscription - resources/views/registration/form.blade.php --}}
@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<section id="inscription" class="py-5">
    <div class="container">
        <h2 class="section-title">
            <i class="fas fa-scroll me-2"></i>
            Invitation à la Guerre
        </h2>
        <form class="registration-form">
            <div class="mb-4">
                <label for="pseudo" class="form-label">
                    <i class="fas fa-user me-2"></i>Pseudo
                </label>
                <input type="text" class="form-control" id="pseudo" required>
            </div>
            <div class="mb-4">
                <label for="hdv" class="form-label">
                    <i class="fas fa-fort-awesome me-2"></i>Niveau d'Hôtel de Ville
                </label>
                <select class="form-control" id="hdv" required>
                    <option value="">Sélectionnez votre niveau</option>
                    <option value="14">HDV 14</option>
                    <option value="13">HDV 13</option>
                    <option value="12">HDV 12</option>
                    <option value="11">HDV 11</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope me-2"></i>Email
                </label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <button type="submit" class="btn cta-button w-100">
                <i class="fas fa-crown me-2"></i>Rejoindre la Guerre
            </button>
        </form>
    </div>
</section>
@endsection
