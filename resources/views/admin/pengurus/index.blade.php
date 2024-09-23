@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Anggota kepengurusan RT 52</h2>
    </div>
    <div class="tambah-btn">
        <a href="{{ url('/pengurus/create') }}" class="btn btn-success btn-sm" title="Add New Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Anggota
        </a>
        <br />
        <br />
        <div class="table-responsive">
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
                            <a href="{{ url('/pengurus/' . $item->id . '/edit') }}" title="Edit pengurus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form method="POST" action="{{ url('/pengurus' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-sm" title="Delete course" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i>Hapus</button>
                            </form>
                        </td>
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