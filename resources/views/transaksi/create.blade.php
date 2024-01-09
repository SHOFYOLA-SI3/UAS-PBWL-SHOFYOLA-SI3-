@extends('layouts.app')

@section('content')
    <h2>MASUKKAN DATA PINJAMAN </h2>

<form action="{{ url('transaksi') }}" method="post">
    @csrf 
    <div class="mb-3">
        <label for=""> NAMA ANGGOTA </label>
        <input type="text" name="nama_anda" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> ID ANGGOTA </label>
        <input type="text" name="id_anggota" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> ID BUKU </label>
        <input type="text" name="id_buku" id="" class="form-control">
    </div>
    <div class="mb-3">
            <label for="">JUDUL</label>
            <input type="text" name="judul_buku" id="" class="form-control">
        </div>
    <div class="mb-3">
        <label for=""> TANGGAL PINJAM </label>
        <input type="date" name="tanggal_pinjam" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> TANGGAL KEMBALI </label>
        <input type="date" name="tanggal_kembali" id="" class="form-control">
    </div>
    <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>

@endsection