@extends('layouts.admin-app')
@section('title', 'Mon profile')
@section('content')
<div class="col-xl-4">
    <div class="card">
      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <img src="assets/img/profile-img.jpg" alt="Profil" class="rounded-circle"
          id="profileImagePreview1">
        <h2>{{Auth::user()->name}} </h2>
        <h3> {{Auth::user()->role}} </h3>
      </div>
    </div>
  </div>

<div class="col-xl-8">
    <div class="card">
      <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier le
              profil</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer le mot
              de
              passe</button>
          </li>
        </ul>

        <div class="tab-content pt-2">
          <!-- Profile Edit -->
          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Profile Edit Form -->
            <form method="POST" action="" enctype="multipart/form-data">
              <div class="row mb-3">
                <label class="col-md-4 col-lg-3 col-form-label">Image de profil</label>
                <div class="col-md-8 col-lg-9">
                  <img src="https://dummyimage.com/120x120/ced4da/6c757d.jpg" alt="Profil"
                    id="profileImagePreview" height="120px">
                  <div class="pt-2">
                    <input type="file" name="avatar" id="avatarUpload" class="form-control" accept="image/*"
                      hidden>
                    <button type="button" class="btn btn-primary btn-sm" title="Upload new profile image"
                      id="uploadBtn">
                      <i class="bi bi-upload"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" title="Remove my profile image"
                      id="deletePreviewImageBtn">
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom complet</label>
                <div class="col-md-8 col-lg-9">
                  <input name="name" type="text" class="form-control" id="fullName" value="John Doe">
                </div>
              </div>

              <div class="row mb-3">
                <label for="username" class="col-md-4 col-lg-3 col-form-label">Pseudo</label>
                <div class="col-md-8 col-lg-9">
                  <input name="username" type="text" class="form-control" id="username" value="johndoe">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                <div class="col-md-8 col-lg-9">
                  <input name="email" type="email" class="form-control" id="Email" value="john.doe@example.com">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer les
                  modifications</button>
              </div>
            </form>
            <!-- End Profile Edit Form -->
          </div>

          <!-- Change Password -->
          <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form method="POST" action="">
              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de passe
                  actuel</label>
                <div class="col-md-8 col-lg-9">
                  <input name="current_password" type="password" class="form-control" id="currentPassword"
                    required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="password" class="col-md-4 col-lg-3 col-form-label">Nouveau mot de
                  passe</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password" type="password" class="form-control" id="password" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirmez le
                  nouveau mot de passe</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password_confirmation" type="password" class="form-control"
                    id="password_confirmation" required>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
              </div>
            </form>
            <!-- End Change Password Form -->
          </div>

        </div><!-- End Bordered Tabs -->
      </div>
    </div>
@endsection
