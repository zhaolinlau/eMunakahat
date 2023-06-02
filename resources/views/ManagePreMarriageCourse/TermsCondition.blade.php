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
                            <h5 class="text-center" style="color: white"  >TERMA DAN PERATURAN KURSUS PRA PERKAHWINAN ISLAM JABATAN AGAMA ISLAM PAHANG</h5>
                            <p class="text-start" style="color: white">1. Hanya peserta yang berdaftar sahaja dibenarkan menyertai kursus pada hari yang berkenaan.</p>
                            <p class="text-start" style="color: white">2. Bayaran penyertaan hendaklah dilakukan di kaunter Pejabat Agama Islam Daerah sebelum tarikh pelaksanaan kursus.</p>
                            <p class="text-start" style="color: white">3. Pengesahan kehadiran hendaklah dibuat pada hari kursus dan pada setiap slot yang dijalankan.</p>
                            <p class="text-start" style="color: white">4. Penangguhan kursus dibenarkan untuk satu kali sahaja dan hendaklah dibuat sekurang-kurangnya seminggu awal daripada tarikh yang didaftarkan kepada satu sesi kursus yang dibuka pendaftarannya sahaja. Tiada sebarang caj dikenakan.</p>
                            <p class="text-start" style="color: white">5. Penangguhan kurang dari tempoh seminggu, bayaran penangguhan sebanyak RM40.00 akan dikenakan.</p>
                            <p class="text-start" style="color: white">6. Penangguhan kursus adalah melalui kaunter Pejabat Agama Islam sahaja dengan membawa bersama resit pendaftaran.</p>
                            <p class="text-start" style="color: white">7. Ketidakhadiran tanpa maklum akan mengakibatkan pendaftaran kursus terbatal dan yuran tidak akan dikembalikan. Pendaftaran baharu perlu dibuat bagi mengikuti semula kursus.</p>
                            <p class="text-start" style="color: white">8. Pembatalan pendaftaran kursus, yuran tidak akan dikembalikan.</p>
                            <p class="text-start" style="color: white">9. Peserta kursus hendaklah berpakaian kemas, sopan dan menutup aurat. Pakaian jarang dan ketat adalah dilarang sama sekali.</p>
                            <p class="text-start" style="color: white">10. Peserta hendaklah menjaga adab dan tingkahlaku serta tidak menimbulkan suasana tidak tenteram sepanjang masa kursus ini berjalan.</p>
                            <p class="text-start" style="color: white">11. Peserta yang hadir ke kursus juga hendaklah mematuhi langkah-langkah keselamatan yang telah ditetapkan oleh pihak penganjur dan Pejabat Agama Islam Daerah.</p>
                            <p class="text-start" style="color: white">12. Sebarang masalah berkaitan kursus, sila rujuk/maklum kepada urusetia bertugas. Peserta hendaklah mematuhi segala peraturan dan arahan dari semasa ke semasa oleh urusetia.</p>                          
                            
                                <a class="btn btn-success " href="premarriagecourseSearch.php" role="button">Semak</a>
                                <a class="btn btn-success float-end" href="{{ route('user.organization') }}" role="button">Daftar Baru</a>
                            
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