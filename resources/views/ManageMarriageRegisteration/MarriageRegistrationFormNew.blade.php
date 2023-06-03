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
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-center" style="color: white">Borang Pendaftaran Perkahwinan</h5>
                <!--upper tab-->
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                      type="button" role="tab" aria-controls="pills-home" aria-selected="true">Maklumat
                      Pemohon</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                      type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Maklumat
                      Pasangan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                      type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Maklumat
                      Perkahwinan</button>
                  </li>
                </ul>
                <!--form for ic-->
                  <form action="" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-4">
                      <label for="icNumber">No.K/P Pasangan:</label>
                      <input type="text" class="form-control" id="icNumber" pattern="[0-9]{12}" required>
                      <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor IC yang sah.
                      </div>

                    </div>
                    <!--form for name-->
                    <div class="col-md-7">
                      <label for="name">Nama Pemohon:</label>
                      <input type="text" class="form-control" id="name" required>
                      <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nama.
                      </div>

                    </div>

                  <div class="col-md-3">
                    <label for="tarikh">Tarikh Lahir:</label>
                    <input type="text" class="form-control" id="tarikh" pattern="[0-31]{2}" required> 
                    <div class="invalid-feedback">
                      Sila masukkan tarikh.
                    </div>
                  </div>

                    <div class="col-4">
                      <label for="Bulan">Bulan Lahir:</label>
                      <select class="form-select" id="Bulan" required>
                        <option value="" hidden selected>Pilih Bulan</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Mac</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Jun</option>
                        <option value="7">Julai</option>
                        <option value="8">Ogos</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">Disember</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila Pilih Bulan.
                      </div>
                    </div>

                    <div class="col-3">
                      <label for="Tahun">Tahun Lahir:</label>
                      <input type="text" class="form-control" id=Tahun" required>
                      <div class="invalid-feedback">
                        Sila masukkan Tahun lahir.
                      </div>
                    </div>

                  <div class="col-md-3">
                    <label for="tarikh">Umur:</label> 
                    <input type="text" class="form-control" id="tarikh" pattern="[0-99]{2}"required> 
                    <div class="invalid-feedback">
                      Sila masukkan umur
                    </div>
                  </div>

                    <div class="col-4">
                      <label for="Bangsa">Bangsa:</label>
                      <select class="form-select" id="Bangsa" required>
                        <option value="" hidden selected>pilih</option>
                        <option value="1">Melayu</option>
                        <option value="2">Cina</option>
                        <option value="3">India</option>
                        <option value="4">Bangladesh</option>
                        <option value="5">Pakistan</option>
                        <option value="6">Indonesian</option>
                        <option value="7">Arab</option>
                        <option value="8">Bumiputera Sabah</option>
                        <option value="9">Bumiputera Sarawak</option>
                        <option value="10">Lain-lain</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila Pilih Bangsa.
                      </div>
                    </div>

                  <div class="col-5">
                    <label for="Bangsa">Warganegara:</label>
                    <select class="form-select" id="warganegara" required>
                      <option value="" hidden selected>pilih</option>
                      <option value="1">Warganegara</option>
                      <option value="2">Bukan Warganegara</option>
                      
                    </select>
                    <div class="invalid-feedback">
                      Sila Pilih warganegara.
                    </div>
                  </div>

                  <div class="col-mb-3">
                    <label for="TarafPendidikan" class="col-sm-2 col-form-label">Taraf Pendidikan</label>
                    <div class="col-sm-5">
                      <select class="form-select" id="TarafPendidikan" required>
                        <option value="" hidden selected>pilih</option>
                        <option value="1">PHD</option>
                        <option value="2">Master</option>
                        <option value="3">Ijazah</option>
                        <option value="4">Diploma</option>
                        <option value="5">STPM/HSC/Sijil</option>
                        <option value="5">SPM/MCE</option>
                        <option value="6">PT3/PMR/SRP/LC</option>
                      </select>
                    </div>
                  </div>

                  <div class="col- mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">Sektor Pekerjaan</label>
                    <div class="col-sm-5">
                        <select class="form-select" id="TarafPendidikan" required>
                          <option value="" hidden selected>pilih</option>
                          <option value="1">Sektor Awam</option>
                          <option value="2">Sektor Swasta</option>
                          <option value="3">Sendirian</option>
                        </select>
                      </div>
                    </div>
                    </div>
                  </div>

                  <div class="col- mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="tempat" id="tempat">
                    </div>
                  </div>

                  <div class="col- mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="tempat" id="tempat">
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-success" role="button">Daftar</button>
                    <a class="btn btn-success" href="{{ route('Register_list') }}">Kembali</a>
                  </div>
                </form>

              </div>


            </div>


            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive"
    aria-labelledby="offcanvasResponsiveLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
        <span class="d-none d-lg-flex">Menu</span>
        <span class="d-lg-none">e-Munakahat</span>
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive"
        aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
      <nav class="nav nav-pills flex-column">
        <form action="" class="d-lg-none" method="get">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
    <script src="{{ mix('resources/js/validation.js') }}"></script>
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


































<!--
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
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                      type="button" role="tab" aria-controls="pills-home" aria-selected="true">Maklumat
                      Pemohon</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                      type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Maklumat
                      Pasangan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                      type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Maklumat
                      Perkahwinan</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                   borang maklumat pemohon
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-MaklumatPemohon-tab">
                    <form action="" method="post" class="row g-2 needs-validation" novalidate>
                      <div class="col-md-5">
                        <label for="icNumber">No.Kad Pengenalan:</label>
                        <input type="text" class="form-control" id="icNumber" pattern="[0-9]{12}" required>
                        <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                        <div class="invalid-feedback">
                          Sila masukkan Nombor IC yang sah.
                        </div>
                      </div>
                      <div class="col-md-7">
                        <label for="namaPemohon">Nama Pemohon:</label>
                        <input type="text" class="form-control" id="namaPemohon" required>
                        <div class="invalid-feedback">
                          Sila masukkan Nama.
                        </div>
                      </div>
                  </div>
                  <!-- tarikh lahir
                  <div class="row">
                    <div class="col">
                      <label for="birthDay">Tarikh Lahir:</label>
                      <select class="form-select" id="birthDay" name="birthDay">
                        <option selected disabled>Day</option>
                        <!-- Add options for birth days
                      </select>
                    </div>
                    <div class="col">
                      <label for="birthMonth">Bulan lahir:</label>
                      <select class="form-select" id="birthMonth" name="birthMonth">
                        <option selected disabled>Month</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Mac</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Jun</option>
                        <option value="7">Julai</option>
                        <option value="8">Ogos</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Disember</option>
                         Add options for birth months
                      </select>
                    </div>
                    <div class="col">
                      <label for="tahunlahir" class="form-label">Tahun Lahir:</label>
                      <input type="number" class="form-" id="tahunlahir" placeholder="Year" required>
                    </div>
                  </div>
                 

                 <div class="col-md-2 mb-3">
                    <label for="category">Bulan:</label>
                    <select class="form-select" id="category" required>
                      <option value="" hidden selected>Month</option>
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Mac</option>
                    </select>
                    </div>
                  </div>
                    <div class="col-md-4 mb-3">
                      <label for="tahunlahir" class="form-label">Tahun Lahir:</label>
                      <input type="number" class="form-control" id="tahunlahir" placeholder="Year" required>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <label for="validationServer03" class="form-label">City</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03"
                      aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationServer04" class="form-label">State</label>
                    <select class="form-select is-invalid" id="validationServer04"
                      aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationServer05" class="form-label">Zip</label>
                    <input type="text" class="form-control is-invalid" id="validationServer05"
                      aria-describedby="validationServer05Feedback" required>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                        aria-describedby="invalidCheck3Feedback" required>
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

                maklumat pasangan
                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                  aria-labelledby="pills-MaklumatPasangan-tab">...











                </div>

                maklumat perkahwinan
                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                  aria-labelledby="pills-MaklumatPerkahwinan-tab">...</div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success"
                  role="button"href="{{ route('Register_list') }}">Kemaskini </button>

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
          -->
