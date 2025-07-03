{{-- filepath: c:\Bintangnovala\nova\portofolio-team\resources\views\home_edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Home</h2>
    <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input class="form-control" type="file" name="image" id="image">
            @if($content && $content->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/'.$content->image) }}" alt="Current Image" width="120">
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi:</label>
            <textarea class="form-control" name="description" id="description" rows="5">{{ $content ? $content->description : '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('home.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
