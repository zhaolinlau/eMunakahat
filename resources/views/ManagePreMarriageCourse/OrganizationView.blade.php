@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col text-left g-5 ">
            <br>
            <h5 style="color: white;">Kursus Pra-Perkahwinan</h5>
            <br>
            <div class="container ">
                <div class="row ">
                    <div class="col">
                        <div class="border border-5 p-3 rounded-end rounded-start">
                        <form>
                            <div class="col-6" style="margin-left: auto; margin-right: auto;">
                                <label for="anjuran" class="col-sm-2 col-form-label">Anjuran</label>
                                <input type="text" class="form-control" name="anjuran" id="anjuran">
                              
                                <label for="Tempat" class="col-sm-2 col-form-label">Tempat</label>
                                <input type="text" class="form-control" name="Tempat" id="Tempat">
                              
                                <label for="tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                                <input type="date" class="form-control" name="tarikh" id="tarikh">
                                
                                <label for="masa" class="col-sm-2 col-form-label">Masa</label>
                                <input type="time" class="form-control" name="masa" id="masa">

                                <label for="KapasitiPeserta" class="col-sm col-form-label">Kapasiti Peserta</label>
                                <input type="number" class="form-control" name="KapasitiPeserta" id="KapasitiPeserta">
                                
                                <label for="SiriTaklimat" class="col-sm col-form-label">Siri Taklimat</label>
                                <input type="text" class="form-control" name="SiriTaklimat" id="SiriTaklimat">
                                
                                <label for="Pegawai" class="col-sm col-form-label">Pegawai</label>
                                <input type="text" class="form-control" name="Pegawai" id="Pegawai">

                                <label for="NoTelefon" class="col-sm col-form-label">No Telefon</label>
                                <input type="text" class="form-control" name="NoTelefon" id="NoTelefon">

                            </div>

                           <!-- <table style="margin-left: auto; margin-right: auto;">
                            <tr>
                            <td>Anjuran </td>
                            <td><input type="text" name="anjuran" /></td>
                            </tr>
                            <tr>
                            <td>Tempat</td>
                            <td><input type="text" name="tempat" /></td>
                            </tr>
                            <tr>
                            <td>Tarikh</td>
                            <td><input type="date" name="tarikh" /></td>
                            </tr>
                            <tr>
                            <td>Masa</td>
                            <td><input type="time" name="masa" /></td>
                            </tr>
                            <tr>
                            <td></td>
                            <td><input type="number" name="kapasiti_peserta" /></td>
                            </tr>
                            <tr>
                            <td></td>
                            <td><input type="text" name="siri_taklimat" /></td>
                            </tr>
                            <tr>
                            <td>Pegawai</td>
                            <td><input type="text" name="pegawai" /></td>
                            </tr>
                            <tr>
                            <td>No. Telefon</td>
                            <td><input type="text" name="no_telefon" /></td>
                            </tr>
                            </table>-->
                            </form>
                            <br>
                            <a class="btn btn-success" href="{{ route('user.terms') }}">Kembali</a>  
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
td {
  margin: 10px;
  padding: 5px
}

</style>
@endsection