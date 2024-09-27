@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Template dokumen surat menyurat</h2>
        <br/>
        <br/>
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