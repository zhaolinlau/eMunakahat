@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
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
                <h5 class="text-center" style="color: white">Pengesahan Nikah >> Kad Nikah & Sijil</h5>
                <div class="container">
                  <table class="table" id="applicationStatusTable">
                    <thead>
                      <tr>
                        <th>Bil</th>
                        <th>No. Kad Pengenalan Pemohon/ Nama</th>
                        <th>No. Kad Pengenalan Pasangan/Nama</th>
                        <th>Tarikh Terima</th>
                        <th>Status</th>
                        <th>Operasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>011198762565</td>
                        <td>019987651511</td>
                        <td>23-10-2022</td>
                        <td>Untuk Diluluskan</td>
                        <td>
                          <a class="btn" href="{{ route('staff.ApplicationStatus') }}"><i
                              class="fa-solid fa-eye fa-lg"></i></a>
                          <a class="btn"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                          <a class="btn" href="{{ route('staff.ApprovalInfo') }}"><i class="fa-solid fa-file-circle-check fa-lg "></i></a>
                          <a class="btn"><i class="fa-solid fa-print fa-lg"></i></a>
                          <a class="btn"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>019991837341</td>
                        <td>987761554411</td>
                        <td>23-10-2022 </td>
                        <td>Untuk Diluluskan</td>
                        <td>
                          <a class="btn" href="{{ route('staff.ApplicationStatus') }}"><i
                              class="fa-solid fa-eye fa-lg"></i></a>
                          <a class="btn" href="{{ route('staff.ApprovalInfo') }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                          <a class="btn" href="{{ route('staff.ApprovalInfo') }}"><i class="fa-solid fa-file-circle-check fa-lg "></i></a>
                          <a class="btn"><i class="fa-solid fa-print fa-lg"></i></a>
                          <a class="btn"><i class="fa-solid fa-trash-can fa-lg"></i></a>
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
