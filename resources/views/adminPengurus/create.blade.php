@extends('adminLayout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman pengurus</div>
  <div class="card-body">
      
      <form action="{{ url('adminPengurus') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Jabatan</label></br>
        <input type="text" name="jabatan" id="jabatan" class="form-control"></br>
        <label>Tanggal lahir</label></br>
        <input type="text" name="tanggalLahir" id="tanggalLahir" class="form-control"></br>
        <label>Tempat lahir</label></br>
        <input type="text" name="tempatLahir" id="tempatLahir" class="form-control"></br>
        
        <input type="submit" value="Simpan" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
<script>
  crs.classList.add('active')
 </script>
@stop