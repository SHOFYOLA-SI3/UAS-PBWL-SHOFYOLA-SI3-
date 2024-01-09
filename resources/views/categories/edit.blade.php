@extends('layouts.app')

@section('content')
    <h2>Edit Category</h2>

    <form action="{{ url('categories/' . $row->id_buku) }}" method="post">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="">JUDUL</label>
            <input type="text" name="judul_buku" id="" class="form-control" value="{{ $row->judul_buku }}">
        </div>
        <div class="mb-3">
            <label for="">PENGARANG</label>
            <input type="text" name="pengarang_buku" id="" class="form-control" value="{{ $row->pengarang_buku }}">
        </div>
        <div class="mb-3">
        <label for="kategori_buku">Kategori</label>
        <select name="kategori_buku" id="kategori_buku">
            <option value="Fiksi" {{ isset($data) && $data->kategori_buku == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
            <option value="Non-Fiksi" {{ isset($data) && $data->kategori_buku == 'Non-Fiksi' ? 'selected' : '' }}>Non-Fiksi</option>
            <option value="Sejarah" {{ isset($data) && $data->kategori_buku == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
            <option value="Teknologi" {{ isset($data) && $data->kategori_buku == 'Teknologi' ? 'selected' : '' }}>Teknologi</option>
            <option value="sains" {{ isset($data) && $data->kategori_buku == 'sains' ? 'selected' : '' }}>sains</option>
        </select>
    </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
