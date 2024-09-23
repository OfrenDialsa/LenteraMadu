@extends('adminLayout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Halaman Pengurus</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $pengurus->nama }}</h5>
        <p class="card-text">Jabatan : {{ $pengurus->jabatan }}</p>
        <p class="card-text">Tanggal lahir : {{ $pengurus->tanggalLahir }}</p>
        <p class="card-text">Tempat lahir : {{ $pengurus->tempatLahir }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
<script>
  crs.classList.add('active')
 </script>
@endsection