@extends('layouts.app')

@section('content')
  <nav class="navbar shadow-sm fixed-top" style="background-color: #2F9577">
    <div class="container-fluid">
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive"
        aria-controls="offcanvasResponsive"><i class="fa-solid fa-bars fa-xl"></i></button>
      <a class="navbar-brand d-none d-lg-flex" href="./">
        e-Munakahat
      </a>

      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user fa-xl"></i>
          <span>test</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
          <li><a class="dropdown-item" href="">My Profile</a></li>
          <li><a class="dropdown-item" href="">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-center" style="color: white">Borang Pendaftaran</h5>
                

                <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Maklumat Pemohon</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Maklumat Pasangan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Maklumat Perkahwinan</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                  <!-- borang maklumat pemohon -->
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-MaklumatPemohon-tab">
                    <form class="row g-3">
                      <div class="col-md-7">
                        <label for="icNumber">No.K/P Pasangan:</label>
                    <input type="text" class="form-control" id="icNumber" pattern="[0-9]{12}" required>
                    <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nombor IC yang sah.
                        </div>
                      </div>
                      <div class="col-10">
                        <label for="NoAkuan">No.Akuan Terima Kebenaran Berkahwin:</label>
                        <input type="text" class="form-control" id="NoAkuan" required>
                        <small class="form-text text-muted">Sila masukkan Nombor Akuan Kebenaran Perkahwinan.</small>
                        <div class="invalid-feedback">
                          Sila masukkan Nombor Akuan yang sah.
                        </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationServerUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend3">@</span>
                          <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                          <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="validationServer03" class="form-label">City</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="validationServer04" class="form-label">State</label>
                        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div id="validationServer04Feedback" class="invalid-feedback">
                          Please select a valid state.
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="validationServer05" class="form-label">Zip</label>
                        <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                        <div id="validationServer05Feedback" class="invalid-feedback">
                          Please provide a valid zip.
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                          <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                          </label>
                          <div id="invalidCheck3Feedback" class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                  
                    </form>
                  </div>

                  <!-- maklumat pasangan -->
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-MaklumatPasangan-tab">...











                  </div>

                  <!-- maklumat perkahwinan -->
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-MaklumatPerkahwinan-tab">...</div>
                </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-success" role="button"href="{{ route('Register_list') }}">Kemaskini </button>
                      
                    </div>
                  </div>

                 
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive"
                    aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
                        <span class="d-none d-lg-flex">Menu</span>
                        <span class="d-lg-none">e-Munakahat</span>
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                      <nav class="nav nav-pills flex-column">
                        <form action="" class="d-lg-none" method="get">
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search">
                            <button class="btn btn-outline-info" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                          </div>
                        </form>
                        <br>
                        <a class="nav-link" href="">Profile</a>
                        <a class="nav-link" href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
                        <a class="nav-link" href="">Permohonan Berkahwin</a>
                        <a class="nav-link" href="{{ route('Register_form') }}">Pendaftaran Perkahwinan</a>
                        <a class="nav-link" href="">Khidmat Nasihat</a>
                      </nav>
                    </div>

                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          Copyright &COPY; <span id="year"></span> e-Munakahat. All Rights Reserved.
                        </div>
                      </div>
                    </div>

                    <script>
                      const year = new Date().getFullYear()
                      document.getElementById('year').innerHTML = year;
                    </script>
                  </div>

                  <style>
                    body {
                      background-image: url("img/bg.jpg");
                      background-size: cover;
                    }

                    .border {
                      border: 5px solid #000;
                      background-color: #56BFA0;
                      border-color: #D2F4EA;
                    }
                  </style>
                @endsection
