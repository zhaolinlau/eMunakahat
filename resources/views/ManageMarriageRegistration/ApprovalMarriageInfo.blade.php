@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row ">
    <div class="col text-left g-5 ">
      <br>
      <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
      <br>
      <div class="container text-left">
        <div class="row ">
          <div class="col">
            <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
              <h5 class="text-center" style="color: white">Pengesahan Nikah >> Senarai Pemohon >> Maklumat Kelulusan</h5>
              <div class="container">
                <label for="namasuami">Nama Suami:</label>
                <input type="text" class="form-control" id="name" required>
                  
                      
              </div>
              <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
              <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
              <script>
                $(document).ready(function() {
                  $('#applicationStatusTable').DataTable();
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