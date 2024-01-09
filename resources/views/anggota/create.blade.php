@extends('layouts.app')

@section('content')
    <h2>MASUKKAN DATA ANGGOTA </h2>

<form action="{{ url('anggota') }}" method="post">
    @csrf 
    <div class="mb-3">
        <label for=""> NAMA </label>
        <input type="text" name="nama_anda" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> ALAMAT </label>
        <textarea name="alamat_anda" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for=""> NOMER TELPONE </label>
        <input type="text" name="no_telpone" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> TANGGAL LAHIR </label>
        <input type="date" name="tanggal_lahir" id="" class="form-control">
    </div>
    <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>

@endsection