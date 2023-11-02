<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>

@extends('components.layout')
@section('title', 'Mahasiswa')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</div>
@section('content')
    <div class="container p-5 shadow-lg rounded-4 mt-5" style="max-width: 500px;">
        <div class="row text-center">
            <h1>Selamat Datang!</h1>
            <p>Lihat Data</p>
        </div>
        <div class="row">
            <div class="text-center">
                <a href="/students" class="btn btn-primary btn-lg px-4">Mahasiswa</a>
            </div>
            <div class="mt-2 text-center">
                <a href="/lecturers" class="btn btn-success btn-lg px-5">Dosen</a>
            </div>
        </div>
    </div>
@endsection
