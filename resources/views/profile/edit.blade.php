<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="image" class="form-label">Foto Profil</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
        @if (!empty($user->image))
            <div class="mt-2">
                <img src="{{ asset('storage/' . $user->image) }}" alt="Foto Profil" style="max-width: 120px; border-radius: 8px;">
            </div>
        @endif
    </div>
</form>