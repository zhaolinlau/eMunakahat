@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

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
                                    <th>Tarikh Mula</th>
                                    <th>Tarikh Tamat</th>
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
                                    <td>28 - 29 JANUARI 2023</td>
                                    <td>100</td>
                                    <td>54</td>
                                    <td><a class="btn" href="{{ route('user.viewOrganization') }}"><i class="fa-solid fa-eye fa-xl"  ></i></a></td>
                                    <td><a class="btn" href="{{ route('user.courseForm') }}"><i class="fa-solid fa-pen-to-square fa-xl"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>PEJABAT AGAMA ISLAM TEMERLOH</td>
                                    <td>DEWAN KULIAH MASHAS TEMERLOH</td>
                                    <td>28 - 29 JANUARI 2023</td>
                                    <td>84</td>
                                    <td>-</td>
                                    <td><a class="btn"><i class="fa-solid fa-eye fa-xl"></i></a></td>
                                    <td><a class="btn" href="{{ route('user.courseForm') }}"><i class="fa-solid fa-pen-to-square fa-xl"></i></a></td>
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