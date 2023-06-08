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
       
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div style="display: flex; justify-content: center;">
                <div class="border border-5 p-3 rounded-end rounded-start" style="width: 900px;">
                  <!-- Your content here -->
                  <h5 class="text-center" style="color: white">Permohonan Kad Nikah dan Sijil</h5>

                <form action="" method="post" class="row g-5 needs-validation" novalidate>
                  <div class="col-12">
                    <label for="NoResit">No.Resit Bayaran</label>

                    <div class="input-group rounded">
                      <input id="searchbar" onkeyup="" class="form-control rounded" type="text" style="width:600px"
                        name="searchNoResit" placeholder="No.Resit..">
                      <button class="btn btn-success" id="Search" style="margin-left:10px;border-radius:8px; width:100px">Cari</button>
                    </div>
                    {{-- <div><input type="text" class="form-control" id="NoResit" Placeholder="Sila Masukkan No.Resit Bayaran"required><button type="submit" class="btn btn-success" role="button" style="float:right"
                    href="#">Cari</button></div> --}}

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
