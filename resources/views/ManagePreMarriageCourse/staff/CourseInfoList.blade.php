@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

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
                <form action="{{route('staff.updateLocation', $course->Course_ID)}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="PAID" class="col-sm col-form-label">PAID</label>
                      <input type="text" class="form-control" id="PAID" name="PAID" required>
                      <div class="invalid-feedback">
                        Sila pilih PAID
                      </div>
                      <label for="Daerah" class="col-sm col-form-label">Daerah</label>
                      <input type="text" class="form-control" value="{{$course->Course_District}}" id="Daerah" name="Daerah" required>
                      <label for="TarikhMula" class="col-sm col-form-label">Tarikh Mula</label>
                      <input type="date" class="form-control" name="TarikhMula" id="TarikhMula">
                      <label for="MasaDari" class="col-sm col-form-label">Masa Dari</label>
                      <input type="time" class="form-control" name="MasaDari" id="MasaDari">
                      <label for="PegawaiBertugas" class="col-sm col-form-label">Pegawai Bertugas</label>
                      <input type="text" class="form-control" name="PegawaiBertugas" id="PegawaiBertugas">
                      <label for="NoTelPegawai" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" value="{{$course->Course_StaffNo}}" name="NoTelPegawai" id="NoTelPegawai">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Tempat" class="col-sm col-form-label">Tempat</label>
                      <input type="text" class="form-control" value="{{$course->Course_Venue}}" name="Tempat" id="Tempat" required>
                      
                      <label for="Alamat" class="col-sm col-form-label">Alamat</label>
                      <input type="text" class="form-control" value="{{$course->Course_Address}}" name="Alamat" id="Alamat" required>
                      <label for="TarikhTamat" class="col-sm col-form-label">Tarikh Tamat</label>
                      <input type="date" class="form-control" name="TarikhTamat" id="TarikhTamat">
                      <label for="MasaHingga" class="col-sm col-form-label">Masa Hingga</label>
                      <input type="time" class="form-control" name="MasaHingga" id="MasaHingga">
                      <label for="Kapasiti" class="col-sm col-form-label">Kapasiti</label>
                      <input type="text" class="form-control" name="Kapasiti" id="Kapasiti">
                      <label for="PaparUmum" class="col-sm col-form-label">Papar Umum</label>
                      <input type="text" class="form-control" name="PaparUmum" id="PaparUmum">
                      <br>
                      <button type="submit" class="btn btn-secondary float-end">Simpan</button>
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
