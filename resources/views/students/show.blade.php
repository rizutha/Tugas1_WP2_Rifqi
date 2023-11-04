@extends('components.layout')
@section('content')
<div class="shadow-lg rounded-4 p-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informasi Mahasiswa</h2>
            </div>
        </div>
    </div>
   
    <div class="row mt-2">
        <div class="my-1">
            <div class="row">
                <strong class="col-2">NIM</strong>
                <p class="col">:  {{ $mhs->nim }}</p>
            </div>
        </div>
        <div class="my-1">
            <div class="form-group row">
                <strong class="col-2">Nama</strong>
                <p class="col">: {{ $mhs->nama }}</p>
            </div>
        </div>
        <div class="my-1">
            <div class="form-group row">
                <strong class="col-2">Prodi</strong>
                <p class="col">: {{ $mhs->prodi }}</p>
            </div>
        </div>
        <div class="my-1">
            <div class="form-group row">
                <strong class="col-2">Tanggal Lahir</strong>
                <p class="col">: {{ $mhs->tgl_lahir }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a class="btn btn-secondary" href="{{ route('lecturers.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection