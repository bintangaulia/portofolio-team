@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Portofolio</h2>
    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $portfolio->title }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input class="form-control" type="file" name="image" id="image">
            @if($portfolio->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/'.$portfolio->image) }}" alt="Current Image" width="120">
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi:</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{ $portfolio->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('home.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
