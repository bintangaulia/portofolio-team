@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tambah Portofolio</h2>
    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Judul:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="title" id="title" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Gambar:</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" name="image" id="image">
            </div>
        </div>

        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('home.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</div>
@endsection
