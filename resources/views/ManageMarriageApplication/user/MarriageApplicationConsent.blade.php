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
          <span></span>
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
        <h5 style="color: rgb(254, 253, 253);">PERMOHONAN PERKAHWINAN</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-center" style="color: white">BORANG PERMOHONAN PERKAHWINAN</h5>
                <!--upper tab-->
                <ul class="nav dark-green nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link bg-success text-white active" href="{{ route('user.ApplicationConsent') }}">Persetujuan dan Wakalah Wali</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationHiv') }}">Permohonan Ujian Saringan HIV</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationResident') }}">Akuan Pemastautinan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPermission') }}">Permohonan Kebenaran Berkahwin</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationChecklist') }}">Senarai Semak</a>
                  </li>
                </ul>
                <!--form -->
                <h5 class="text-left" style="color: white">Persetujuan Wali</h5>
                <div class="container" style="word-spacing: 10px;">
                  <p>Saya <input type="text" class="form-control-inline" placeholder="Nama Wali" aria-label="Nama Wali"> No.Kad Pengenalan <input type="text" class="form-control-inline" placeholder="IcWali" aria-label="IcWali"> 
                    adalah <input type="text" class="form-control-inline" placeholder="hubungan" aria-label="hubungan"> kepada <input type="text" class="form-control-inline" placeholder="Nama Pengantin Perempuan" aria-label="Nama Pengantin Perempuan"> 
                    dengan ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan di antara <input type="text" class="form-control-inline" placeholder="Nama Pengantin Perempuan" aria-label="Nama Pengantin Perempuan"> 
                    dengan <input type="text" class="form-control-inline" placeholder="Nama Pengantin Lelaki" aria-label="Nama Pengantin Lelaki"> dengan mas kahwinnya RM <input type="text" class="form-control-inline" placeholder="Mas Kahwin" aria-label="Mas Kahwin"> 
                    *tunai/hutang. Saya akan mengakad nikahkan sendiri perkahwinan ini.
                  </p>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                      <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                    </div>
                    <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                      <label for="tarikh" class="col-sm col-form-label">Tandatangan Wali</label>
                      <br>
                      <p>_ _ _ _ _ _ _ _ _</p>
                      <br>
                    </div>
                  </div>
                  <h5 class="text-left" style="color: white">Wakalah Wali</h5>
                  <p>Saya <input type="text" class="form-control-inline" placeholder="Nama Wali" aria-label="Nama Wali"> No.Kad Pengenalan <input type="text" class="form-control-inline" placeholder="IcWali" aria-label="IcWali"> 
                    adalah <input type="text" class="form-control-inline" placeholder="hubungan" aria-label="hubungan"> kepada <input type="text" class="form-control-inline" placeholder="Nama Pengantin Perempuan" aria-label="Nama Pengantin Perempuan"> 
                    dengan ini mewakilkan kepada <input type="text" class="form-control-inline" placeholder="Nama Wakil" aria-label="Nama Wakil"> No. Kad Pengenalan <input type="text" class="form-control-inline" placeholder="IC Wakil" aria-label="IcWakil">
                    sebagai <input type="text" class="form-control-inline" placeholder="Jawantan" aria-label="Jawantan"> untuk mengakadnikahkan <input type="text" class="form-control-inline" placeholder="hubungan" aria-label="hubungan"> saya dengan  
                    <input type="text" class="form-control-inline" placeholder="Nama Pengantin Lelaki" aria-label="Nama Pengantin Lelaki"> dengan mas kahwinnya RM <input type="text" class="form-control-inline" placeholder="Mas Kahwin" aria-label="Mas Kahwin"> 
                    *tunai/hutang. Saya akan mengakad nikahkan sendiri perkahwinan ini.
                  </p>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                      <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                      <br>
                      <p>Saya dengan ini menerima wakalah Wali di atas</p>
                    </div>
                    <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                      <label for="tarikh" class="col-sm col-form-label">Tandatangan Wali</label>
                      <p>_ _ _ _ _ _ _ _ _</p>
                      <label for="tarikh" class="col-sm col-form-label">Tandatangan Penerima Wakalah</label>
                      <p>_ _ _ _ _ _ _ _ _</p>
                    </div>
                  </div>
                  <h5 class="text-left" style="color: white">Saksi Wakalah Wali</h5> 
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="NamaSaksi1" class="col-sm-2 col-form-label">Nama</label>
                      <input type="text" class="form-control" name="NamaSaksi1" id="NamaSaksi1">
                      <label for="IcSaksi1" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="date" class="form-control" name="IcSaksi1" id="IcSaksi1">
                      <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                      <input type="text" class="form-control" name="Alamat" id="Alamat">
                      <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                      <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                      <br>
                      <label for="TTsaksi1" class="col-sm col-form-label">Tandatangan Saksi(1)</label>
                      <p>_ _ _ _ _ _ _ _ _</p>
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="NamaSaksi2" class="col-sm-2 col-form-label">Nama</label>
                      <input type="text" class="form-control" name="NamaSaksi2" id="NamaSaksi2">
                      <label for="IcSaksi2" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="number" class="form-control" name="IcSaksi1" id="IcSaksi2">
                      <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                      <input type="text" class="form-control" name="Alamat" id="Alamat">
                      <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                      <input type="text" class="form-control" name="Tarikh" id="Tarikh">
                      <br>
                      <label for="TTsaksi2" class="col-sm col-form-label">Tandatangan Saksi(2)</label>
                      <p>_ _ _ _ _ _ _ _ _</p>
                    </div>
                  </div>
                  <h5 class="text-left" style="color: white">Pengesahan Wakalah Wali</h5>
                    <p>Saya <input type="text" class="form-control-inline" placeholder="Pendaftar" aria-label="Pendaftar"> mengesahkan bahawa Wakalah Wali diatas adalah dibuat di hadapan saya di <input type="text" class="form-control-inline" placeholder="Alamat tempat wakalah wali dibuat" aria-label="alamatWakalahWali"> 
                    dan is mengikut kehendak Hukum Syarak</p>
                    <div class="row">
                      <div class="col-4" style="margin-left: auto; margin-right: auto;">
                        <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                        <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                      </div>
                      <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                        <label for="TTpendaftar" class="col-sm col-form-label">Tandatangan Pendaftar dan Cap Rasmi</label>
                        <br>
                        <p>_ _ _ _ _ _ _ _ _</p>
                      </div>
                    </div>
                    <button class="btn float-md-end"><i class="fa-solid fa-print fa-xl"></i></button>
                    <br>
                </div>
                <br>
                <a class="btn btn-success " href="{{ route('user.ApplicationPerkahwinan') }}" role="button">Kembali</a>
                <a class="btn btn-success float-end" href="{{ route('user.ApplicationHiv') }}" role="button">Seterusnya</a>
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
        <a class="nav-link" href="{{ route('user.ApplicationPemohon')}}">Permohonan Berkahwin</a>
        <a class="nav-link" href="{{ route('user.Registerform') }}">Pendaftaran Perkahwinan</a>
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
