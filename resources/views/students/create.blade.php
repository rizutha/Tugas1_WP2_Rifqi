@extends('students.layout')
  
@section('content')
<div class="shadow-lg p-5 rounded-4">
    <div class="row">
            <div class="pull-left col-10">
                <h2>Tambahkan Data Baru</h2>
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
    
    <form action="/students/simpan" method="POST">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="text" name="nim" class="form-control" value="{{ old('nim') }}">
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <strong>Program Studi:</strong>
                <select name="prodi" class="form-control">
                    <option value="" default>-- Choose --</option>
                    <option value="Sistem Informasi" {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem
                        Informasi</option>
                    <option value="Sistem Informasi Akuntansi"
                        {{ old('prodi') == "Sistem Informasi Akuntansi"? 'selected' : '' }}>
                        Sistem Informasi Akuntansi
                    </option>
                    <option value="Teknologi Komputer" {{ old('prodi') == 'Teknologi Komputer' ? 'selected' : '' }}>
                        Teknologi
                        Komputer</option>
                </select>
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection