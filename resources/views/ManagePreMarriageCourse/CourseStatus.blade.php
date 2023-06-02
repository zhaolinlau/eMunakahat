@extends('layouts.app')

@section('content')
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
                        <form class="row g-3">
                            <div class="col-auto">
                                <label for="id" class="text-center" style="color: white">No. Kad Pengenalan</label>
                                <input type="text" readonly class="form-control-plaintext" id="organization" value="">
                            </div>
                            <div class="col-auto">
                                <label for="ic" class="visually-hidden"></label>
                                <input type="text" class="form-control" id="ic" placeholder="">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-success mb-3">Cari</button>
                            </div>
                            </form>    
                            <table class="table table-bordered bg-light border-dark" style="color: black;">
                                <thead class="table-dark border-light">
                                    <tr >
                                    <th scope="col">Bil</th>
                                    <th scope="col">No. Kad Pengenalan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No. Siri Taklimat</th>
                                    <th scope="col">Tarikh Mohon</th>
                                    <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>123456789012</td>
                                        <td>John Doe</td>
                                        <td>1</td>
                                        <td>2023-06-02</td>
                                        <td>Daftar</td>
                                      </tr>
                                </tbody>
                                </table>
                                <a class="btn btn-success " href="{{ route('user.terms') }}" role="button">Kembali</a>
                        </div>
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
            <a class="nav-link"  href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
            <a class="nav-link"  href="">Permohonan Berkahwin</a>
            <a class="nav-link"  href="">Pendaftaran Perkahwinan</a>
            <a class="nav-link"  href="">Khidmat Nasihat</a>
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

