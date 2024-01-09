@extends('layouts.app')

@section('content')

<h2> DATA ANGGOTA </h2>

<div class="card">
      <div class="card-header">

<a href="{{ url('anggota/create') }}" type="button" class="btn btn-secondary mb-3 float-end">MASUKKAN DATA</a>

<div class="card-body">
<table class="table table-sm table-striped table-bordered ">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO TELPONE</th>
        <th>TANGGAL LAHIR</th>
        <th> EDIT </th>
        <th> DELETE </th>
    </tr>
    @foreach ($rows as $row)

    <tr>
        <td>{{ $row->id_anggota }}</td>
        <td>{{ $row->nama_anda }}</td>
        <td>{{ $row->alamat_anda }}</td>
        <td>{{ $row->no_telpone }}</td>
        <td>{{ $row->tanggal_lahir }}</td>
        <td><a href="{{ url('anggota/edit/'. $row->id_anggota ) }}" class="btn btn-info">Edit</a></td>
        <td>
                <form action="{{ url('anggota/' . $row->id_anggota) }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection