@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-6">
    <label for="namasuami" class="form-label">Nama Suami:</label>
    <input type="text" class="form-control" id="namasuami" required>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <label for="namaisteri" class="form-label">Nama Isteri:</label>
    <input type="text" class="form-control" id="namaisteri" required>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <label for="name" class="form-label">No Akuan Terima:</label>
    <input type="text" class="form-control" id="name" required>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <label for="status" class="form-label">Status Permohonan:</label>
    <input type="text" class="form-control" id="status" required>
  </div>
</div>