@extends('adminLayout')
@section('content')

<div class="card">
        <div class="card-header">
            <h2>Anggota kepengurusan RT 52</h2>
            <p class="aler">Anda telah login sebagai <b>Admin</b>, Silakan Tambah, edit atau hapus data pengurus</p>
            <a href="{{ url('/adminPengurus/create') }}" class="btn btn-success btn-sm" title="Add New Course">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Anggota
            </a>
        </div>
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
                        <a href="{{ url('/adminPengurus/' . $item->id) }}" title="Lihat pengurus"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</button></a>
                        <a href="{{ url('/adminPengurus/' . $item->id . '/edit') }}" title="Edit pengurus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                        <form method="POST" action="{{ url('/adminPengurus' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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