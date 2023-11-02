@extends('components.layout')

@section('content')
<div class="shadow-lg rounded-4 p-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informasi Dosen</h2>
            </div>
        </div>
    </div>
   
    <div class="row mt-2">
        <div class="my-1">
            <div class="row">
                <strong class="col-2">NIP</strong>
                <p class="col">: {{ $dosen->nip }}</p>
            </div>
        </div>
        <div class="my-1">
            <div class="form-group row">
                <strong class="col-2">Nama</strong>
                <p class="col">: {{ $dosen->nama }}</p>
            </div>
        </div>
        <div class="my-1">
            <div class="form-group row">
                <strong class="col-2">Keilmuan</strong>
                <p class="col">: {{ $dosen->keilmuan }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a class="btn btn-secondary" href="{{ route('lecturers.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection