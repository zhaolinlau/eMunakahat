@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <nav class="navbar shadow-sm fixed-top" style="background-color: #ADB0B2">
    <div class="container-fluid">
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive"
        aria-controls="offcanvasResponsive"><i class="fa-solid fa-bars fa-xl"></i></button>
      <a class="navbar-brand d-none d-lg-flex" href="./">
        e-Munakahat
      </a>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user fa-xl"></i>
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
        <h5 style="color: rgb(254, 253, 253);">MAKLUMAT KURSUS</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
                <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                  <h5 class="text-center" style="color: white">DAFTAR MAKLUMAT</h5>
                </div>
                <form>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="PAID" class="col-sm col-form-label">PAID</label>
                      <input type="text" class="form-control" id="PAID" required>
                      <div class="invalid-feedback">
                        Sila pilih PAID
                      </div>
                      <label for="TarikhMula" class="col-sm col-form-label">Tarikh Mula</label>
                      <input type="date" class="form-control" name="TarikhMula" id="TarikhMula">
                      <label for="MasaDari" class="col-sm col-form-label">Masa Dari</label>
                      <input type="time" class="form-control" name="MasaDari" id="MasaDari">
                      <label for="PegawaiBertugas" class="col-sm col-form-label">Pegawai Bertugas</label>
                      <input type="text" class="form-control" name="PegawaiBertugas" id="PegawaiBertugas">
                      <label for="NoTelPegawai" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelPegawai" id="NoTelPegawai">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Tempat" class="col-sm col-form-label">Tempat</label>
                      <input type="text" class="form-control" id="Tempat" required>
                      <label for="TarikhTamat" class="col-sm col-form-label">Tarikh Tamat</label>
                      <input type="date" class="form-control" name="TarikhTamat" id="TarikhTamat">
                      <label for="MasaHingga" class="col-sm col-form-label">Masa Hingga</label>
                      <input type="time" class="form-control" name="MasaHingga" id="MasaHingga">
                      <label for="Kapasiti" class="col-sm col-form-label">Kapasiti</label>
                      <input type="text" class="form-control" name="Kapasiti" id="Kapasiti">
                      <label for="PaparUmum" class="col-sm col-form-label">Papar Umum</label>
                      <input type="text" class="form-control" name="PaparUmum" id="PaparUmum">
                      <br>
                      <a class="btn btn-secondary float-end"  href="">Simpan</a>
                    </div>
                    
                   </div>
                   
                  </form>
                <div class="container">
                  <table class="table" id="InfoListTable">
                    <br>
                  <thead>
                      <tr >
                        <th>Bil</th>
                        <th>PAID</th>
                        <th>Siri</th>
                        <th>Tempat</th>
                        <th>Tarikh Mula</th>
                        <th>Tarikh Tamat</th>
                        <th>Kapasiti</th>
                        <th>Papar Umum</th>
                        <th>Operasi</th>
                        </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>PEJABAT AGAMA ISLAM KUANTAN</td>
                          <td>KTN/0002/2020</td>
                          <td>DEWAN SEMINAR MASJID TEPIAN PUTRA</td>
                          <td>04/01/2020</td>
                          <td>05/01/2020</td>
                          <td>50</td>
                          <td>TIDAK</td>
                          <td>
                            <a class="btn" href=""><i class="fa-solid fa-pen-to-square fa-sm " ></i></a>
                            <a class="btn" ><i class="fa-solid fa-trash-can fa-sm"  ></i></a>
                          </td>
                      </tr>
                      <!-- Add more table rows here -->
                  </tbody>
                  </table>
              </div>
                  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>   
                  <script>
                      $(document).ready(function() {
                          $('#InfoListTable').DataTable();
                      });
                  </script>
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
          <br>
        </form>
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <button type="button" class="btn btn-outline-secondary">Profile</button>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Kursus Pra Perkahwinan
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('staff.LocationList') }}">Daftar Lokasi</a></li>
              <li><a class="dropdown-item" href="{{ route('staff.InfoList') }}">Daftar Maklumat</a></li>
              <li><a class="dropdown-item" href="{{ route('staff.ApplicantList') }}">Senarai Peserta</a></li>
              <li><a class="dropdown-item" href="{{ route('staff.ApplicantAttendance') }}">Kehadiran Peserta</a></li>
            </ul>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Permohonan Berkahwin
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('staff.ApplicationList') }}">Senarai Pemohon</a></li>
            </ul>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Pendaftaran Perkahwinan
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">1</a></li>
              <li><a class="dropdown-item" href="#">2</a></li>
            </ul>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Khidmat Nasihat
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">1</a></li>
              <li><a class="dropdown-item" href="#">2</a></li>
            </ul>
          </div>
        </div>
        <br>
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
      background-color: #ADB0B2;
      border-color: #D2F4EA;
    }
  </style>
@endsection
