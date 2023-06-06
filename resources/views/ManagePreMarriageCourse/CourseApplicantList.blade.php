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
                  <h5 class="text-center" style="color: white">SENARAI PESERTA</h5>
                </div>
                <div class="container">
                  <table class="table" id="ApplicantListTable">
                    <br>
                  <thead>
                      <tr >
                        <th>Bil</th>
                        <th>Tarikh Mohon</th>
                        <th>Nama Peserta</th>
                        <th>No Kad Pengenalan</th>
                        <th>Siri</th>
                        <th>Status</th>
                        <th>Operasi</th>
                        </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>20/12/2019</td>
                      <td>Siti Binti Sharir</td>
                      <td>000202022222</td>
                      <td>KTN/0001/2019</td>
                      <td>Diluluskan</td>

                      <td>
                        <a class="btn" href=""><i class="fa-solid fa-file-circle-check fa-sm " ></i></a>
                        <a class="btn" ><i class="fa-solid fa-trash-can fa-sm"  ></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>12/12/2021</td>
                      <td>Hasniah Aulie</td>
                      <td>011998012234</td>
                      <td>KTN/0346/2021</td>
                      <td>Diluluskan</td>

                      <td>
                        <a class="btn" href=""><i class="fa-solid fa-file-circle-check fa-sm " ></i></a>
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
                          $('#ApplicantListTable').DataTable();
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
