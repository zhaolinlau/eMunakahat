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
                <ul class="nav nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item bg-dark-green border border-white" role="presentation">
                    <a class="nav-link text-white" href="{{ route('Register_newForm') }}">Maklumat
                      Pemohon
                    </a>
                  </li>
                  <li class="nav-item border bg-dark-green border-white" role="presentation">
                    <a class="nav-link text-white" href="{{ route('Register_FormPasangan') }}">
                      Maklumat Pasangan
                    </a>
                  </li>
                  <li class="nav-item bg-dark-green border border-white" role="presentation">
                    <a class="nav-link text-white active bg-success" href="{{ route('MaklumatPerkahwinan') }}">Maklumat
                      Perkahwinan
                    </a>
                  </li>
                </ul>
                <!--form for ic-->
                <h6 class="text-left" style="color: white">MAKLUMAT PERKAHWINAN</h6>

               <div class="col-md-4">
                    <label for="tarikhmohon">Tarikh Mohon</label>
                    <input type="date" class="form-control" name="tarikhmohon" id="tarikhmohon">
                  </div>

                  <!--form for name-->
                  <div class="col-md-7">
                    <label for="name">Nama Pemohon:</label>
                    <input type="text" class="form-control" id="name" required>
                    <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nama.
                    </div>

                    <div class="col-md-5">
                      <label for="name">Nama Pasangan:</label>
                      <input type="text" class="form-control" id="name" required>
                      <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nama.
                      </div>

                      <div class="col-md-7">
                        <label for="name">Negara:</label>
                          <select class="form-select" id="Negara" required>
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
                            Sila Pilih Negara.
                          </div>
                        </div>

                  </div>
                 
                  <h6 class="text-left" style="color: white">MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>

                  
                  <div class="col-md-4">
                    <label for="tarikh">Tarikh Akad Nikah</label>
                    <input type="date" class="form-control" name="tarikh" id="tarikh">
                  </div>

                  <div class="col-12">
                    <label for="Alamat ">Alamat Tempat Kahwin</label>
                    <input type="text" class="form-control" id="Alamat " required>
                    <small class="form-text text-muted">Sila masukkan Alamat Semasa anda.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Alamat.
                    </div>

                  <form action="" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-4">
                      <label for="icNumber">Mas Kahwin</label>
                      <input type="text" class="form-control" id="icNumber" pattern="[0-9]{12}" required>
                      <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor IC yang sah.
                      </div>
  
                    </div>
                    <!--form for name-->
                    <div class="col-md-7">
                      <label for="name">Jenis Mas Kahwin</label>
                      <input type="text" class="form-control" id="name" required>
                      <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nama.
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

                  <div class="col- mb-3">
                    <label for="Jawatan" class="col-sm-2 col-form-label">Pekerjaaan / Jawatan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="Jawatan" required>
                      <div class="invalid-feedback">
                        Sila masukkan Pekerjaan
                      </div>
                    </div>
                  </div>

                  <div class="col- mb-3">
                    <label for="Pendapatan" class="col-sm-2 col-form-label">Pendapatan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="Pendapatan" required>
                      <div class="invalid-feedback">
                        Sila Masukkan Pendapatan.
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="AlamatKP ">Alamat K/P:</label>
                    <input type="text" class="form-control" id="AlamatKP " required>
                    <small class="form-text text-muted">Sila masukkan Alamat mengikut kad Pengenalan.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Alamat.
                    </div>

                    <div class="col-12">
                      <label for="Alamat ">Alamat Semasa:</label>
                      <input type="text" class="form-control" id="Alamat " required>
                      <small class="form-text text-muted">Sila masukkan Alamat Semasa anda.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Alamat.
                      </div>

                      <div class="col-md-6">
                        <label for="NoTel">No Telefon:</label>
                        <input type="text" class="form-control" id="NoTel" pattern="[0-9]{11}"required>
                        <small class="form-text text-muted">Sila masukkan No telefon</small>
                        <div class="invalid-feedback">
                          Sila masukkan Nombor Tel yang sah.
                        </div>
                      </div>

                      <div class="col-6">
                        <label for="Status">Status Perkahwinan:</label>
                        <select class="form-select" id="Status" required>
                          <option value="" hidden selected>pilih</option>
                          <option value="1">Anak Dara</option>
                          <option value="2">Balu</option>
                          <option value="3">Janda</option>
                          <option value="4">Janda Berhias</option>
                          <option value="5">Thayyib</option>
                        </select>
                        <div class="invalid-feedback">
                          Sila Pilih Status.
                        </div>
                      </div>

                      <style>
                        .float-right {
                          float: right;
                        }
                      </style>
                      
                      <label for="inputField" class="float-right">Sila isi semua ruangan diatas</label>


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
        <a class="nav-link" href="{{ route('Register_list') }}">Pendaftaran Perkahwinan</a>
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



































