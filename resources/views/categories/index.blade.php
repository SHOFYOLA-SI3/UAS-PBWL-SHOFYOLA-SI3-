@extends('layouts.app')
@section('content')

<h2>Categories</h2>

<div class="card">
      <div class="card-header">

<a href="{{ url('categories/create') }}" type="button" class="btn btn-secondary mb-3 float-end">Add Category</a>

<div class="card-body">
<table class="table table-sm table-striped table-bordered">
      <tr>
            <th>ID BUKU</th>
            <th>JUDUL</th>
            <th>PENGARANG</th>
            <th>KATEGORI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->id_buku }}</td>
                  <td>{{ $row->judul_buku }}</td>
                  <td>{{ $row->pengarang_buku }}</td>
                  <td>{{ $row->kategori_buku }}</td>
                  <td><a href="{{ url('categories/edit/' . $row->id_buku) }}" class="btn btn-info">Edit</a></td>
                  <td>
                        <form action="{{ url('categories/' . $row->id_buku) }}" method="post">
                              @method('DELETE')
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection