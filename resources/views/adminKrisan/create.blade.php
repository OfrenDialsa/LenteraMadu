@extends('adminLayout')
@section('content')
 
<div class="card">
  <div class="card-header">Kirimkan kritik dan saran anda</div>
  <div class="card-body">
      
      <form action="{{ url('adminKrisan') }}" method="post">
        {!! csrf_field() !!}
        <label>Judul</label></br>
        <input type="text" name="judul" id="judul" class="form-control"></br>
        <label>Ketikkan pendapat anda</label></br>
        <input type="text" name="aduan" id="aduan" class="form-control"></br>
        
        <input type="submit" value="Kirim" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
<script>
  stu.classList.add('active')
 </script>
@stop