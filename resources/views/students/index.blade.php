@extends('students.layout')
 
@section('content')
    <div class="shadow-lg p-5 rounded-4 my-5">
        <div class="d-flex justify-content-between">
            <div class="pull-left">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/students/tambah"> Tambah Data</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class='mt-2'>
            <table class="table table-hover align-middle">
            <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th width="20%"><i class="fas fa-cog">Action</i></th>
                    </tr>
                </thead>
                @foreach ($mhs as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td>
                            <a href="/students/tampil/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/students/ubah/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="/students/hapus/{{ $item->id }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin akan menghapus data?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $mhs->links() }} 
    </div>
@endsection