@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Anggota kepengurusan RT 52</h2>
        <br/>
        <br/>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tanggal lahir</th>
                <th>Tempat lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengurus as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>{{ $item->tanggalLahir }}</td>
                <td>{{ $item->tempatLahir }}</td>

                <td>
                    <a href="{{ url('/pengurus/' . $item->id) }}" title="Lihat pengurus"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</button></a>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
<script>
    crs.classList.add('active')
</script>
@endsection