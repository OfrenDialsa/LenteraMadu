@extends('adminLayout')
@section('content')

<div class="card">
  <div class="card-header">Edit page</div>
  <div class="card-body">

    <form action="{{ url('adminPengurus/' .$pengurus->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$pengurus->id}}" id="id" />
      <label>Nama</label></br>
      <input type="text" name="nama" id="nama" value="{{$pengurus->nama}}" class="form-control"></br>
      <label>Jabatan</label></br>
      <input type="text" name="jabatan" id="jabatan" value="{{$pengurus->jabatan}}" class="form-control"></br>
      <label>Tanggal lahir</label></br>
      <input type="text" name="tanggalLahir" id="tanggalLahir" value="{{$pengurus->tanggalLahir}}" class="form-control"></br>
      <label>Tempat lahir</label></br>
      <input type="text" name="tempatLahir" id="tempatLahir" value="{{$pengurus->tempatLahir}}" class="form-control"></br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
<script>
  crs.classList.add('active')
</script>
@stop