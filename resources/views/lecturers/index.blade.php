@extends('lecturers.layout')

@section('content')
    <div class="rounded-4 my-5 p-5 shadow-lg">
        <div class="row">
            <div class="pull-left col-10">
                <h2>Data Dosen</h2>
            </div>
            <div class="pull-right col-2">
                <a class="btn btn-primary" href="{{ route('lecturers.create') }}"> Tambah Data</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class='mt-2'>
            <table class="table-hover table align-middle">
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
