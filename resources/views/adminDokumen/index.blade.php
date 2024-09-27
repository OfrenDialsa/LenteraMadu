@extends('adminLayout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Template Dokumen</h2>
        <p class="aler">Anda telah login sebagai <b>Admin</b>, silakan tambah atau hapus dokumen yang anda inginkan</p>
        <a href="{{ url('/adminDokumen/create') }}" class="btn btn-success btn-sm" title="Add New file">
            <i class="fa fa-plus" aria-hidden="true"></i> Tambah file
        </a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>File</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dokumen as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->file }}</td>

                    <td>
                        <a href="{{asset('pdf/'. $item->file)}}" title="Lihat pdf" target="_blank"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Lihat PDF</button></a>

                        <form method="POST" action="{{ url('/adminDokumen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary btn-sm" title="Hapus dokumen?" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i>Hapus</button>
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
    tea.classList.add('active')
</script>
@endsection