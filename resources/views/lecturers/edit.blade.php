@extends('components.layout')
  
@section('content')
<div class="shadow-lg rounded-4 p-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New lecturers</h2>
            </div>
        </div>
    </div>
       
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       
    <form action="{{ route('lecturers.update', [$dosen->id]) }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIM:</strong>
                {{-- input text nip dibuat hidden untuk proses post request di controller --}}
                <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}" hidden>
                {{-- input text yang hanya untuk tampilan saja, disabled dan tanpa nama --}}
                <input type="text" class="form-control" value="{{ $dosen->nip }}" disabled readonly>
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
            </div>
            <div class="form-group">
                <strong>Keilmuan:</strong>
                <input type="text" name="keilmuan" class="form-control" value="{{ $dosen->keilmuan }}">
            </div>
            <div>
                <br>
                <a href="{{ route('lecturers.index') }}" class="btn btn-success btn-xs btn-flat"><i class="fa fa-pluscircle"></i><< Kembali </a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection