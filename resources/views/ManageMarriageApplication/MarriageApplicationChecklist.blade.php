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
                <h5 class="text-center" style="color: white">Permohonan Perkahwinan</h5>
                <!--upper tab-->
                <ul class="nav dark-green nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationConsent') }}">Persetujuan dan Wakalah Wali</a>
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
                  <li class="nav-item border border-white bg-dark-green"  role="presentation">
                    <a class="nav-link bg-success text-white" href="{{ route('user.ApplicationChecklist') }}">Senarai Semak</a>
                  </li>
                </ul>
                <!--form -->
                <h5 class="text-left" style="color: white">SENARAI DOKUMEN PERMOHONAN BERKAHWIN YANG PERLU MUAT NAIK</h5>
                <div class="container" style="word-spacing: 10px;">
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="pemohon" class="col-sm col-form-label">Nama Pemohon</label>
                      <input type="text" class="form-control" name="pemohon" id="pemohon">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="NamaPasangan" class="col-sm col-form-label">Nama Pasangan</label>
                      <input type="text" class="form-control" name="NamaPasangan" id="NamaPasangan"><br>
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-5">
                      <label for="formFileSm" class="form-label" >PERSETUJUAN WAKALAH WALI</label>
                    </div>
                    <div class="col">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-5">
                      <label for="formFileSm" class="form-label" >BORANG UJIAN SARINGAN HIV</label>
                    </div>
                    <div class="col-3">
                      <input class="forml form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-5">
                      <label for="formFileSm" class="form-label" >AKUAN PEMASTAUTINAN</label>
                    </div>
                    <div class="col-5">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-5">
                      <label for="formFileSm" class="form-label" >BORANG PERMOHONAN UNTUK KEBENARAN BERKAHWIN</label>
                    </div>
                    <div class="col-5">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-5">
                      <label for="formFileSm" class="form-label" >BUKTI BAYARAN</label>
                    </div>
                    <div class="col-5">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                </div>
                <br>
                <a class="btn btn-success " href="{{ route('user.ApplicationPermission') }}" role="button">Kembali</a>
                <a class="btn btn-success float-end" href="" role="button">Hantar</a>
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
