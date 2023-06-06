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
        <h5 style="color: rgb(254, 253, 253);">MAKLUMAT PESERTA</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
                <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                  <h5 class="text-center" style="color: white">KEHADIRAN PESERTA</h5>
                </div>
                <form>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Anjuran" class="col-sm col-form-label">Anjuran</label>
                      <input type="text" class="form-control" id="Anjuran" required>
                      <label for="Tahun" class="col-sm col-form-label">Tahun</label>
                      <input type="text" class="form-control" name="Tahun" id="Tahun">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="SiriKursus" class="col-sm col-form-label">Siri Kursus</label>
                      <input type="text" class="form-control" name="MasaDari" id="SiriKursus">
                      <label for="TempatKursus" class="col-sm col-form-label">Tempat Kursus</label>
                      <input type="text" class="form-control" id="TempatKursus" required>
                      <br>
                      <a class="btn btn-secondary float-end"  href="">Cari</a>
                    </div>
                   </div>
                   <br>
                   <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
                    <div class="row">
                      <div class="col-4" style="">
                        <label for="Anjuran" class="col-sm col-form-label">Anjuran :</label>
                        <br>
                        <label for="Tahun" class="col-sm col-form-label">Tahun :</label>
                        <br>
                        <label for="SiriKursus" class="col-sm col-form-label">Siri Kursus :</label>
                        <br>
                        <label for="PegawaiBertugas" class="col-sm col-form-label">Siri :</label>
                        <br>
                        <label for="TempatKursus" class="col-sm col-form-label">Tempat Kursus :</label>
                        <br>
                      </div>
                    </div>
                  </div>                 
                  </form>
                  <br>
                  <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                    <h5 class="text-center" style="color: white">Senarai Peserta</h5>
                  </div>
                <div class="container">
                  <table class="table" id="AttendanceTable">
                    <br>
                    <thead>
                      <tr >
                        <th>Bil</th>
                        <th>Nama</th>
                        <th>No. Kad Pengenalan</th>
                        <th>Jantina</th>
                        <th>Kehadiran</th>
                        <th>Catatan</th>
                        <th>Kelulusan</th>
                        </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td>Siti bin Shahir</td>
                        <td>011102267780</td>
                        <td>Perempuan</td>
                        <td>
                          <select class="form-select" aria-label="Kehadiran">
                            <option selected>Sila Pilih</option>
                            <option value="1">Hadir</option>
                            <option value="2">Tidak Hadir</option>
                          </select>
                        </td>
                        <td>-</td>
                        <td>
                          <select class="form-select" aria-label="Kelulusan">
                            <option selected>Sila Pilih</option>
                            <option value="1">LULUS</option>
                            <option value="2">GAGAL</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Abu bin Ali</td>
                          <td>980017651467</td>
                          <td>Lelaki</td>
                          <td>
                            <select class="form-select" aria-label="Kehadiran">
                              <option selected>Sila Pilih</option>
                              <option value="1">Hadir</option>
                              <option value="2">Tidak Hadir</option>
                            </select>
                          </td>
                          <td>-</td>
                          <td>
                            <select class="form-select" aria-label="Kelulusan">
                              <option selected>Sila Pilih</option>
                              <option value="1">LULUS</option>
                              <option value="2">GAGAL</option>
                            </select>
                          </td>
                      </tr>
                      <!-- Add more table rows here -->
                  </tbody>
                  </table>
               <br>
               <a class="btn btn-secondary float-end"  href="">Simpan</a>
               <br>
               <br>
              </div>
                  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>   
                  <script>
                      $(document).ready(function() {
                          $('#AttendanceTable').DataTable();
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
