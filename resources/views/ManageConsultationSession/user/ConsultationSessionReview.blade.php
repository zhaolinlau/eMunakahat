@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Khidmat Nasihat</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-left" style="color: white">Borang Permohonan Sesi</h5>
                <form action="" method="" class="row g-3 needs-validation" novalidate>
                  <!--form for name-->
                    
                    <div class="col-md-5">
                        <div class="row">
                            <label for="SektorPekerjaan" class="col-sm col-form-label">No. Daftar</label>
                            <select class="form-select" id="SektorPekerjaan" required>
                                <option value="" hidden selected>Sila Pilih</option>
                                <option value="1">Sektor Awam</option>
                                <option value="2">Sektor Swasta</option>
                                <option value="3">Sendirian</option>
                            </select>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <label for="date">Tarikh:</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Sila Pilih Tarikh" required>
                          </div>
                        </div>

                            <div class="form-group">
                              <label for="time">Masa:</label>
                              <input type="time" class="form-control" id="time" name="time" placeholder="Select a time" required>
                            </div>
                            
                            <label for="SektorPekerjaan" class="col-sm col-form-label">Cara Perjumpaan</label>
                            <select class="form-select" id="SektorPekerjaan" required>
                                <option value="" hidden selected>Sila Pilih</option>
                                <option value="1">Sektor Awam</option>
                                <option value="2">Sektor Swasta</option>
                                <option value="3">Sendirian</option>
                            </select>


                        </div>
                    </div>


                    <div class="col-12 mt-3">
                      <!-- Add margin-bottom to create spacing -->
                      <button type="submit" class="btn btn-success" role="button"
                       >Hantar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>


      </div>


      {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> --}}

      {{-- <script>
                    $(document).ready(function() {
                      $('#marriageTable').DataTable();
                    });
                  </script> --}}


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