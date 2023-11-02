<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>

@extends('layout')
@section('title', 'Mahasiswa')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</div>
@section('content')
    <div class="container mt-5">
        <div class="row text-center">
            <h1>Selamat Datang!</h1>
            <p>Silakan pilih peran Anda</p>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="/students" class="btn btn-primary btn-lg">Students</a>
            </div>
            <div class="col-md-6 text-center">
                <a href="/lecturers" class="btn btn-success btn-lg">Lecturers</a>
            </div>
        </div>
    </div>
@endsection
