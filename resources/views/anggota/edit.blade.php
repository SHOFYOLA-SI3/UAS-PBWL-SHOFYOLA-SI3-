@extends('layouts.app')

@section('content')

<h2>EDIT DATA ANGGOTA </h2>

<form action="{{ url('anggota/' . $row->id_anggota) }}" method="post">
    @method('PATCH')
    @csrf 
    <div class="mb-3">
        <label for=""> NAMA </label>
        <input type="text" name="nama_anda" id="" class="form-control" value="{{ $row->nama_anda}}">
    </div>
    <div class="mb-3">
        <label for=""> ALAMAT </label>
        <textarea name="alamat_anda" class="form-control" id="" cols="30" rows="10">{{ $row->alamat_anda }}</textarea>
    </div>
    <div class="mb-3">
        <label for=""> NOMER TELPONE </label>
        <input type="text" name="no_telpone" id="" class="form-control" value="{{ $row->no_telpone}}">
    </div>
    <div class="mb-3">
        <label for=""> TANGGAL LAHIR </label>
        <input type="date" name="tanggal_lahir" id="" class="form-control" value="{{ $row->tanggal_lahir}}">
    </div>
    <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>

@endsection