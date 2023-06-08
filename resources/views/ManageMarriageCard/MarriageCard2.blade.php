@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  {{-- style for drop-down at left tab --}}
  <style>
    .dropdown-menu {
      background-color: #f0f0f0;
      /* Set background color */
      border: none;
      width: 100%;
      /* Remove border */
      /* Add width */
    }

    .dropdown-menu a.dropdown-item {
      color: #333;
      /* Set text color */
    }

    .dropdown-menu a.dropdown-item:hover {
      background-color: #e9ecef;
      /* Set background color on hover */
    }

    .dropdown-menu a.dropdown-item:focus {
      outline: none;
      /* Remove focus outline */
      background-color: #e9ecef;
      /* Set background color on focus */
    }
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
        <h5 style="color: rgb(254, 253, 253);">Kad Nikah dan Sijil</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-center" style="color: white">Permohonan Kad Nikah dan Sijil</h5>

                <!--form for name-->
                <div class="col-md-7">
                  <label for="name">Nama Suami:</label>
                  <input type="text" class="form-control" id="name" placeholder="Sila Masukkan Nama Penuh*"
                    required>
                  <div class="invalid-feedback">
                    Sila masukkan Nama.
                  </div>

                </div>

                <div class="col-md-7">
                  <label for="name">Nama Isteri:</label>
                  <input type="text" class="form-control" id="name" placeholder="Sila Masukkan Nama Penuh*"
                    required>
                  <div class="invalid-feedback">
                    Sila masukkan Nama.
                  </div>

                </div>
                <div class="col-md-4">
                  <label for="tarikhmohon">Tarikh Mohon</label>
                  <input type="date" class="form-control" name="tarikhmohon" id="tarikhmohon">
                </div>
                <div class="col-md-4">
                  <label for="tarikhTerima">Tarikh Terima</label>
                  <input type="date" class="form-control" name="tarikhTerima" id="tarikTerima">
                </div>

                <div class="col-md-6">
                  <label for="pemohonan">No. Pemohonan Online:</label>
                  <input type="text" class="form-control" id="pemohonan"required>
                </div>
                <div class="col-md-6">
                  <label for="AkuanTerima">No.Akuan Terima:</label>
                  <input type="text" class="form-control" id="AkuanTerima" required>
                </div>
                <div class="col-md-6">
                  <label for="Pendaftaran">Status Pendaftaran Nikah:</label>
                  <input type="text" class="form-control" id="Pendaftaran" required>
                </div>
                <div class="col-md-4">
                  <label for="Pendaftaran">No.Resit Bayaran:</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="Pendaftaran" required>
                    <button class="btn" onclick="printReceipt()"><i class="fa-solid fa-print fa-xl"></i></button>
                  </div>
                  <div class="invalid-feedback">
                    Sila masukkan Nombor Sijil
                  </div>

                  {{-- checkbox --}}

                  <div class="col-md-6">
                    <label for="PilihanPenghantaran">Pilihan Penghantaran:</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                      <label class="form-check-label" for="inlineRadio1">COD</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                      <label class="form-check-label" for="inlineRadio2">Pungutan di Pejabat</label>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="alamatPenghantaran">Alamat Penghantaran:</label>
                    <input type="text" class="form-control" id="alamatPenghantaran"
                      placeholder="Sila Masukkan Alamat Semasa*" required>
                    <div class="invalid-feedback">
                      Sila masukkan Alamat.
                    </div>
                  </div>

                  <div class="col-12 mt-3">
                    <!-- Add margin-bottom to create spacing -->
                    <button type="submit" class="btn btn-success" role="button" href="">Hantar</button>
                  </div>

                </div>
              </div>
            </div>
          </div>


        </div>


        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> --}}

        {{-- <script>
                    $(document).ready(function() {
                      $('#marriageTable').DataTable();
                    });
                  </script> --}}
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
                  <button class="btn btn-outline-info" type="submit"><i
                      class="fa-solid fa-magnifying-glass"></i></button>
                </div>
              </form>
              {{-- left tab navigation --}}
              <br>
              <a class="nav-link" href="">Profile</a>
              <a class="nav-link" href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
              <a class="nav-link" href="">Permohonan Berkahwin</a>
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="pendaftaranDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">Pendaftaran Perkahwinan</a>
                <ul class="dropdown-menu" aria-labelledby="pendaftaranDropdown">
                  <li><a class="nav-link " href="{{ route('user.MarriageCard') }}">Kad Nikah</a></li>
                  <li><a class="nav-link" href="{{ route('user.RegisterList') }}">Carian Pendaftaran</a></li>
                </ul>
                <a class="nav-link" href="">Khidmat Nasihat</a>

              </div>
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

            // script for dropdown hover
            document.querySelectorAll('.nav-item.dropdown').forEach(function(element) {
              element.addEventListener('mouseenter', function() {
                this.querySelector('.dropdown-menu').classList.add('show');
                this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', true);
              });

              element.addEventListener('mouseleave', function() {
                this.querySelector('.dropdown-menu').classList.remove('show');
                this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', false);
              });
            });
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
      </div>
    @endsection
