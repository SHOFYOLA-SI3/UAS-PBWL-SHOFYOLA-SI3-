@extends('layouts.app')

@section('content')
    <h2>Add Category</h2>

    <form action="{{ url('categories') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">JUDUL</label>
            <input type="text" name="judul_buku" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">PENGARANG</label>
            <input type="text" name="pengarang_buku" id="" class="form-control">
        </div>
        <div class="mb-3">
        <label for="kategori_buku">Kategori</label>
            <select name="kategori_buku" id="kategori_buku">
                <option value="Fiksi">Fiksi</option>
                <option value="Non-Fiksi">Non-Fiksi</option>
                <option value="Sejarah">Sejarah</option>
                <option value="Teknologi">Teknologi</option>
                <option value="sains">sains</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
