@extends('layouts.admin-app')
@section('content')
<div class="container my-5">
    <h2>Classement des Joueurs</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom d'utilisateur</th>
                <th>Points</th>
                <th>Étoiles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Joueur1</td>
                <td>1500</td>
                <td>75</td>
            </tr>
            <tr>
                <th>2</th>
                <td>Joueur2</td>
                <td>1400</td>
                <td>70</td>
            </tr>
            <!-- Autres joueurs -->
        </tbody>
    </table>
</div>
@endsection
