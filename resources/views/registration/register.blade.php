{{-- @dump($errors->all()) --}}
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CoC Tournois - Inscription</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css" rel="stylesheet')}}">

</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <h3>CoC Tournois</h3>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Créer votre compte</h5>
                                        <p class="text-center small">Rejoignez l'Arène et Recevez Votre Invitation à la Guerre</p>
                                    </div>

                                    <!-- Affichage des erreurs -->
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <form action="{{ route('joueur.store') }}" method="POST" class="row g-3">
                                        @csrf

                                        <!-- Champ Nom -->
                                        <div class="col-12">
                                            <label for="name" class="form-label">Nom & Prenom(s)</label>
                                            <div class="input-group">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Champ Email -->
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Champ Mot de passe -->
                                        <div class="col-12">
                                            <label for="password" class="form-label">Mot de passe</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                                            @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Confirmation du Mot de passe -->
                                        <div class="col-12">
                                            <label for="password_confirmation" class="form-label">Confirmer Mot de passe</label>
                                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Bouton d'inscription -->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">S'inscrire</button>
                                        </div>
                                        <!-- Lien vers la page de connexion -->
                                        <div class="col-12">
                                            <p class="small mb-0">Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous ici</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

