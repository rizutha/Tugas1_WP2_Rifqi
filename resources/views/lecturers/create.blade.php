@extends('components.layout')
  
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
    
    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIP:</strong>
                <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <strong>Keilmuan:</strong>
                <input type="text" name="keilmuan" class="form-control" value="{{ old('keilmuan') }}"
                    placeholder="contoh : Ilmu Komputer">
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection