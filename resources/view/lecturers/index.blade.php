@extends('components.layout')
@section('title', 'Dosen')
@section('content')
    <div class="rounded-4 p-5 shadow-lg">
        <div class="">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="row">
                <div class="col-9">
                    <h2 class="text-dark m-0">Data Dosen</h2>
                </div>
                <a href="{{ route('lecturers.create') }}" class="btn btn-success btn-xs btnflat"><i class="col-2 fa fa-plus-circle"></i>
                Tambah Data
                </a>
            </div>
        <br>
        <div class="box-body table-responsive">
            <table class="table-hover table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Keilmuan</th>
                        <th width="20%"><i class="fas fa-cog">Action</i></th>
                    </tr>
                </thead>
                @foreach ($dosen as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->keilmuan }}</td>
                        <td>
                            <a href="{{ route('lecturers.show', [$item->id]) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('lecturers.edit', [$item->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form class="d-inline" action="{{ route('lecturers.destroy', [$item->id]) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus data?')">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $dosen->links() }}
    </div>
@endsection
