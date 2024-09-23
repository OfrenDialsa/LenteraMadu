@extends('layout')
@section('content')

<div class="card" position="fixed">
    <div class="card-header">
        <h2>Ruang diskusi</h2>
        <p class="aler">Ruang diskusi ini dikelola oleh <b>Ketua RT</b> dan <b>Pemuda RT</b>, silakan berikan keluh kesah anda</p>
        <a href="{{ url('/krisan/create') }}" class="btn btn-success btn-sm" title="Add New file">
            <i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Diskusi
        </a>
    </div>
</div>

@foreach($krisan as $item)
<div class="card">
    <ol class="list-unstyled">

        <li class="media">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="{{URL::asset('/image/warga.png')}}" alt="Warga" width="50px" height="50px">
                </div>
                <div class="flex-grow-1 ms-3">
                    <p class="judul">{{ $item->judul }}</p>
                    <p class="user">Dikirim oleh: <b>{{ $item->user }}</b> - {{ $item->created_at->format('d M Y, H:i') }}</p>
                    <p class="aduan">{{ $item->aduan }}</p>
                </div>
                <div class="media-body">
                    <h6>Status:</h6>
                    {{ $item->status }}
                </div>
            </div>
        </li>

    </ol>
</div>
@endforeach




<script>
    stu.classList.add('active')
</script>
@endsection