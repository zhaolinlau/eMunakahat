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
            <div class="container ">
                <div class="row ">
                    <div class="col" >
                      <div class="border border-5 p-3 rounded-end rounded-start">
                          <form>
                            <div class="col-10" style="margin-left: auto; margin-right: auto;">
                              <label for="anjuran" class="col-sm-2 col-form-label">Anjuran</label>
                              <input type="text" class="form-control" name="anjuran" id="anjuran">
                            </div>
                            <div class="row">
                              <div class="col-4" style="margin-left: auto; margin-right: auto;">
                                <label for="Tempat" class="col-sm-2 col-form-label">Tempat</label>
                                <input type="text" class="form-control" name="Tempat" id="Tempat">
                                
                                <label for="ic" class="col-sm col-form-label">No Kad Pengenalan</label>
                                <input type="text" class="form-control" name="ic" id="ic">
                                
                                <label for="alamat" class="col-sm col-form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                                <label for="NoTelefon" class="col-sm col-form-label">No Telefon</label>
                                <input type="text" class="form-control" name="NoTelefon" id="NoTelefon">
                                <label for="TarafPendidikan" class="col-sm col-form-label">Taraf Pendidikan</label>
                                    <select class="form-select" id="TarafPendidikan" required>
                                      <option value="" hidden selected>Sila Pilih</option>
                                      <option value="1">PHD</option>
                                      <option value="2">Master</option>
                                      <option value="3">Ijazah</option>
                                      <option value="4">Diploma</option>
                                      <option value="5">STPM/HSC/Sijil</option>
                                      <option value="5">SPM/MCE</option>
                                      <option value="6">PT3/PMR/SRP/LC</option>
                                    </select>

                                <label for="CadanganTarikh" class="col-sm col-form-label">Cadangan Tarikh Akad Nikah</label>
                                <input type="date" class="form-control" name="CadanganTarikh" id="CadanganTarikh">
                                <label for="NoResitBayaran" class="col-sm col-form-label">No Resit Bayaran</label>
                                <input type="file" class="form-control" name="NoResitBayaran" id="NoResitBayaran">
                              </div>
                            
                              <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                                <label for="tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                                <input type="date" class="form-control" name="tarikh" id="tarikh">
                                
                                <label for="pemohon" class="col-sm col-form-label">Nama Pemohon</label>
                                <input type="text" class="form-control" name="pemohon" id="pemohon">
                                
                                <label for="Jantina" class="col-sm-2 col-form-label">Jantina</label>
                                <select class="form-select" id="Bulan" required>
                                  <option value="" hidden selected>Sila Pilih</option>
                                  <option value="1">Lelaki</option>
                                  <option value="2">Perempuan</option>
                                </select>
                                
                                <label for="Negeri" class="col-sm-2 col-form-label">Negeri</label>
                                <select class="form-select" name="Negeri" id="Negeri">
                                  <option value="Selangor">Selangor</option>
                                  <option value="Kuala Lumpur">Kuala Lumpur</option>
                                  <option value="Pahang">Pahang</option>
                                  <option value="Terengganu">Terengganu</option>
                                  <option value="Kelantan">Kelantan</option>
                                  <option value="Sarawak">Sarawak</option>
                                  <option value="Sabah">Sabah</option>
                                  <option value="Labuan">Labuan</option>
                                  </select>
                                  
                                  <label for="SektorPekerjaan" class="col-sm col-form-label">Sektor Pekerjaan</label>
                                  <select class="form-select" id="SektorPekerjaan" required>
                                    <option value="" hidden selected>Sila Pilih</option>
                                    <option value="1">Sektor Awam</option>
                                    <option value="2">Sektor Swasta</option>
                                    <option value="3">Sendirian</option>
                                  </select>
                                <label for="kebenaran" class="col-sm col-form-label">Kebenaran Jabatan Agama Islam Negeri</label>
                                <select class="form-select" name="kebenaran" id="kebenaran">
                                  <option value="Selangor">Selangor</option>
                                  <option value="Kuala Lumpur">Kuala Lumpur</option>
                                  <option value="Pahang">Pahang</option>
                                  <option value="Terengganu">Terengganu</option>
                                  <option value="Kelantan">Kelantan</option>
                                  <option value="Sarawak">Sarawak</option>
                                  <option value="Sabah">Sabah</option>
                                  <option value="Labuan">Labuan</option>
                                  </select>
                              </div>
                             </div>
                            </form>
                            <br>
                            
                            <a class="btn btn-success" href="{{ route('user.terms') }}">Kembali</a>  
                            <a class="btn btn-success float-end"  href="">Hantar</a>
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
td {
  margin: 10px;
  padding: 5px
}

</style>
@endsection