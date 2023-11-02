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
       
    <form action="/students/perbarui/{{ $mhs->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIM:</strong>
                {{-- input text nim dibuat hidden untuk proses post request di controller --}}
                <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}" hidden>
                {{-- input text yang hanya untuk tampilan saja, disabled dan tanpa nama --}}
                <input type="text" class="form-control" value="{{ $mhs->nim }}" disabled readonly>
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
            </div>
            <div class="form-group">
                <strong>Program Studi:</strong>
                <select name="prodi" class="form-control">
                    <option value="Sistem Informasi"
                        {{ old('prodi', $mhs->prodi) ==
                        'Sistem Informasi'
                            ? 'selected'
                            : '' }}>
                        Sistem Informasi</option>
                    <option value="Teknologi Komputer"
                        {{ old('prodi', $mhs->prodi) ==
                        'Teknologi Komputer'
                            ? 'selected'
                            : '' }}>
                        Teknologi Komputer</option>
                    <option value="Sistem Informasi Akuntansi"
                        {{ old('prodi', $mhs->prodi) == 'Sistem Informasi Akuntansi' ? 'selected' : '' }}>Sistem
                        InformasiAkuntansi</option>
                </select>
            </div>
            <div>
                <a href="/students" class="btn btn-success btn-xs btn-flat"><i class="fa fa-pluscircle"></i><< Kembali </a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection