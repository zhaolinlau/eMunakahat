@extends('layouts.app')

@section('content')
  <style>
  </style>
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
                <ul class="nav dark-green nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white active" href="{{ route('user.ApplicationPemohon') }}">Maklumat
                      Pemohon</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link  bg-success text-white" href="{{ route('user.ApplicationPasangan') }}">Maklumat
                      Pasangan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPerkahwinan') }}">Maklumat
                      Perkahwinan</a>
                  </li>
                </ul>
                <!--form for ic-->
                <form action="" method="post" class="row g-3 needs-validation" novalidate>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="IcPasangan" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="text" class="form-control" id="IcPasangan" pattern="[0-9]{12}" required>
                      <small class="form-text text-muted">Sila masukkan 12 Digit No Kad Pengenalan</small>
                      <div class="invalid-feedback">
                        Sila masukkan No Kad Pengenalan yang sah
                      </div>
                      <br>
                      <label for="NamaPasangan" class="col-sm col-form-label">Nama Pasangan</label>
                      <input type="text" class="form-control" name="NamaPasangan" id="NamaPasangan">
                      <label for="DOBPasangan" class="col-sm col-form-label">Tarikh Lahir</label>
                      <input type="date" class="form-control" name="DOBPasangan" id="DOBPasangan">
                      <label for="UmurPasangan" class="col-sm col-form-label">Umur</label>
                      <input type="date" class="form-control" name="UmurPasangan" id="UmurPasangan">
                      <div class="invalid-feedback">
                        Sila masukkan Umur
                      </div>
                      <label for="BangsaPasangan" class="col-sm col-form-label">Bangsa</label>
                      <select class="form-select" id="BangsaPasangan" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Melayu">Melayu</option>
                        <option value="Cina">Cina</option>
                        <option value="India">India</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Indonesian">Indonesian</option>
                        <option value="Arab">Arab</option>
                        <option value="Bumiputera Sabah">Bumiputera Sabah</option>
                        <option value="Bumiputera Sarawak">Bumiputera Sarawak</option>
                        <option value="Lain-lain">Lain-lain</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Bangsa
                      </div>
                      <label for="WarganegaraPasangan" class="col-sm col-form-label">Warganegara</label>
                      <select class="form-select" id="WarganegaraPasangan" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Warganegara">Warganegara</option>
                        <option value="BukanWarganegara">Bukan Warganegara</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Warganegara
                      </div>
                      <label for="AlamatPasangan" class="col-sm col-form-label">Alamat Pasangan</label>
                      <input type="text" class="form-control" name="AlamatPasangan" id="AlamatPasangan">
                      <label for="NoTelPasangan" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelPasangan" id="NoTelPasangan">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="TarafPendidikanPasangan" class="col-sm col-form-label">Taraf Pendidikan</label>
                      <select class="form-select" id="TarafPendidikanPasangan" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="PHD">PHD</option>
                        <option value="Master">Master</option>
                        <option value="Ijazah">Ijazah</option>
                        <option value="Diploma">Diploma</option>
                        <option value="STPM">STPM/HSC/Sijil</option>
                        <option value="SPM">SPM/MCE</option>
                        <option value="PT3">PT3/PMR/SRP/LC</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Taraf Pendidikan
                      </div>
                      <label for="SektorPekerjaanPasangan" class="col-sm col-form-label">Sektor Pekerjaan</label>
                      <select class="form-select" id="SektorPekerjaanPasangan" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Awam">Sektor Awam</option>
                        <option value="Swasta">Sektor Swasta</option>
                        <option value="Sendirian">Sendirian</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Sektor Pekerjaan
                      </div>
                      <label for="PekerjaanPasangan" class="col-sm col-form-label">Pekerjaan</label>
                      <input type="text" class="form-control" name="PekerjaanPasangan" id="PekerjaanPasangan">
                      <div class="invalid-feedback">
                        Sila isi Pekerjaan
                      </div>
                      <label for="PendapatanPasangan" class="col-sm col-form-label">Pendapatan (RM)</label>
                      <input type="number" class="form-control" name="PendapatanPasangan" id="PendapatanPasangan">
                      <div class="invalid-feedback">
                        Sila isi Pendapatan
                      </div>
                      <label for="StatusPerkahwinanPasangan" class="col-sm col-form-label">Status Perkahwinan</label>
                      <select class="form-select" id="StatusPerkahwinanPasangan" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="1">Anak Dara</option>
                        <option value="2">Balu</option>
                        <option value="3">Janda</option>
                        <option value="4">Janda Berhias</option>
                        <option value="5">Thayyib</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Status Perkahwinan
                      </div>
                      <label for="StatusSbPasangan" class="col-sm col-form-label">Status Saudara Baru</label>
                      <select class="form-select" id="StatusSbPasangan" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Status Saudara Baru
                      </div>
                      <label for="NoSijilPasangan" class="col-sm col-form-label">No. Sijil Kursus Perkahwinan</label>
                      <input type="text" class="form-control" id="NoSijilPasangan" pattern="[0-9]{11}"required>
                      <small class="form-text text-muted">Sila masukkan No. Sijil Kursus</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor Sijil Kursus Perkahwinan
                      </div>
                    </div>
                  </div> 
                </form>
                <br>
                <a type="submit" class="btn btn-success float-end" href="{{ route('user.ApplicationPasangan') }}">Seterusnya</a>
                <a class="btn btn-success" href="{{ route('user.ApplicationPemohon') }}">Kembali</a>
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
    .float-right {
      float: right;
    }
  </style>
@endsection