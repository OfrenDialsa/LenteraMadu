@extends('adminLayout')
@section('content')

<div class="card">
  <div class="card-header">Berikan tanggapan</div>
  <div class="card-body">

    <form action="{{ url('adminKrisan/' .$krisan->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$krisan->id}}" id="id" />
      <label>Berikan tanggapanmu</label>
      </br>
      </br>
      <select class="form-select" aria-label="Default select example" id="status" name="status" value="{{$krisan->status}}">
        <option value="Belum ditanggapi">Belum ditanggapi</option>
        <option value="Sedang diproses">Sedang diproses</option>
        <option value="Telah Diproses">Telah Diproses</option>
      </select>
      </br>
      </br>
      <input type="submit" value="Tanggapi" class="btn btn-success"></br>
    </form>

  </div>
</div>
<script>
  crs.classList.add('active')
</script>
@stop