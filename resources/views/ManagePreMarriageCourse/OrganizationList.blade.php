@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<nav class="navbar shadow-sm fixed-top" style="background-color: #2F9577">
    <div class="container-fluid">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"><i class="fa-solid fa-bars fa-xl"></i></button>
        <a class="navbar-brand d-none d-lg-flex" href="./">
            e-Munakahat
        </a>
            
        <div class="nav-item dropdown" >
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
            <h5 style="color: white;">Kursus Pra-Perkahwinan</h5>
            <br>
            <div class="container text-left">
                <div class="row ">
                    <div class="col">
                        <div class="border border-5 p-3 rounded-end rounded-start">
                            <h5 class="text-center" style="color: white">Carian Anjuran</h5>
                            <div class="container">
                              <table class="table" id="organizationTable">
                                <thead>
                                  <tr>
                                    <th>Bil</th>
                                    <th>Anjuran</th>
                                    <th>Tempat</th>
                                    <th>Tarikh</th>
                                    <th>Kapasiti Peserta</th>
                                    <th>Kekosongan</th>
                                    <th>Papar Lanjut</th>
                                    <th>Daftar Penyertaan</th>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>PEJABAT AGAMA ISLAM MARAN</td>
                                    <td>DEWAN AUDITORIUM AL-GHAZALI PAID MARAN</td>
                                    <td>28 - 29 JANUARI 2023</td>
                                    <td>100</td>
                                    <td>54</td>
                                    <td><button class="btn" href="{{ route('user.viewOrganization') }}"><i class="fa-solid fa-eye fa-xl"  ></i></button></td>
                                    <td><button class="btn"><i class="fa-solid fa-pen-to-square fa-xl"></i></button></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>PEJABAT AGAMA ISLAM TEMERLOH</td>
                                    <td>DEWAN KULIAH MASHAS TEMERLOH</td>
                                    <td>28 - 29 JANUARI 2023</td>
                                    <td>84</td>
                                    <td>-</td>
                                    <td><button class="btn"><i class="fa-solid fa-eye fa-xl"></i></button></td>
                                    <td><button class="btn"><i class="fa-solid fa-pen-to-square fa-xl"></i></button></td>
                                  </tr>
                                  <!-- Add more table rows here -->
                                </tbody>
                              </table>
                              <div class="col-12">
                                <a class="btn btn-success " href="{{ route('user.terms') }}" role="button">Kembali</a>
                              </div>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>   
                            <script>
                                $(document).ready(function() {
                                    $('#organizationTable').DataTable();
                                });
                            </script>
                        </div> 
                    </div>
                </div>                     
            </div>     
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
                <span class="d-none d-lg-flex">Menu</span>
                <span class="d-lg-none">e-Munakahat</span>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body" >
            <nav class="nav nav-pills flex-column" >
                <form action="" class="d-lg-none" method="get" >
                    <div class="input-group" >
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
        
        <script>
            const year = new Date().getFullYear()
            document.getElementById('year').innerHTML = year;
        </script>
    </div>
</div>

<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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