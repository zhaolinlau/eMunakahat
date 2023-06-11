@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">PERMOHONAN PERKAHWINAN</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
                <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                  <h5 class="text-center" style="color: white">DAFTAR LOKASI</h5>
                </div>
                <form action="" method="POST">
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Tempat" class="col-sm-2 col-form-label">Tempat</label>
                      <input type="text" class="form-control" name="Tempat" id="Tempat">                     
                      <label for="Alamat" class="col-sm col-form-label">Alamat</label>
                      <input type="text" class="form-control" name="Alamat" id="Alamat">
                      <label for="Daerah" class="col-sm col-form-label">Daerah</label>
                      <input type="text" class="form-control" name="Daerah" id="Daerah">
                      <label for="NoTelefon" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelefon" id="NoTelefon">
                      <br>
                      <button type="submit" class="btn btn-secondary float-end">Simpan</button>
                    </div>
                    
                   </div>
                   
                  </form>
                <div class="container">
                  <table class="table" id="LocationListTable">
                    <br>
                  <thead>
                      <tr >
                        <th>Bil</th>
                        <th>Nama Tempat</th>
                        <th>Alamat</th>
                        <th>Daerah</th>
                        <th>No. Telefon</th>
                        <th>Operasi</th>
                        </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>DEWAN AS SAKINAH</td>
                          <td>PEJABAT AGAMA ISLAM DAERAH KUANTAN</td>
                          <td>KUANTAN</td>
                          <td>097266098</td>
                          <td>
                            <a class="btn" href=""><i class="fa-solid fa-pen-to-square fa-sm " ></i></a>
                            <a class="btn" ><i class="fa-solid fa-trash-can fa-sm"  ></i></a>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>DEWAN SEMINAR MAJU</td>
                          <td>LAPANG BESAR, JALAN BESAR, PUTRA SQUARE, 25300 KUANTAN, PAHANG DARUL MAKMUR</td>
                          <td>KUANTAN</td>
                          <td>098882018</td>
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
                          $('#LocationListTable').DataTable();
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
