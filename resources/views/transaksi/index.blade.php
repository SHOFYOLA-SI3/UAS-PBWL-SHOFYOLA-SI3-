@extends('layouts.app')
@section('content')

<h2>Transaksi Pinjaman</h2>

<div class="card">
      <div class="card-header">

<a href="{{ url('transaksi/create') }}" type="button" class="btn btn-secondary mb-3 float-end">Add Transaksi</a>

<div class="card-body">
<table class="table table-sm table-striped table-bordered">
      <tr>
            <th>ID PINJAMAN</th>
            <th>NAMA ANGGOTA</th>
            <th>ID ANGGOTA</th>
            <th>ID BUKU</th>
            <th>JUDUL BUKU</th>
            <th>TANGGAL PINJAM</th>
            <th>TANGGAL KEMBALI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->id_pinjaman }}</td>
                  <td>{{ $row->nama_anda }}</td>
                  <td>{{ $row->id_anggota }}</td>
                  <td>{{ $row->id_buku }}</td>
                  <td>{{ $row->judul_buku }}</td>
                  <td>{{ $row->tanggal_pinjam }}</td>
                  <td>{{ $row->tanggal_kembali }}</td>
                  <td><a href="{{ url('transaksi/edit/' . $row->id_pinjaman) }}" class="btn btn-info">Edit</a></td>
                  <td>
                        <form action="{{ url('transaksi/' . $row->id_pinjaman) }}" method="post">
                              @method('DELETE')
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection