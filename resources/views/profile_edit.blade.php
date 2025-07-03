{{-- filepath: c:\Bintangnovala\nova\portofolio-team\resources\views\profile_edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #081b29 0%, rgb(0, 0, 0) 100%);
        }

        .edit-section-title {
            font-size: 1.7rem;
            font-weight: bold;
            color: #0ef;
            margin-bottom: 1.5rem;
            margin-top: 2.5rem;
            letter-spacing: 2px;
        }

        .edit-card {
            background: rgba(17, 46, 66, 0.97);
            border-radius: 20px;
            box-shadow: 0 4px 32px rgba(0, 0, 0, 0.12);
            padding: 2.5rem 2rem 2rem 2rem;
            margin-bottom: 2.5rem;
            color: #fff;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .edit-card label {
            color: #0ef;
            font-weight: 500;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .edit-card input[type="text"],
        .edit-card textarea {
            background: #081b29;
            color: #fff;
            border: 1.5px solid #0ef;
            border-radius: 8px;
            font-size: 1.08rem;
            margin-bottom: 1rem;
            padding: 0.7rem 1rem;
        }

        .edit-card input[type="file"] {
            background: #081b29;
            color: #fff;
            border: none;
            font-size: 1.05rem;
            margin-bottom: 0.5rem;
        }

        .edit-card img {
            border-radius: 10px;
            margin-top: 10px;
            border: 2px solid #0ef;
            box-shadow: 0 2px 8px rgba(0, 238, 255, 0.08);
        }

        .edit-btn {
            background: #0ef;
            color: #081b29;
            border: none;
            font-weight: bold;
            padding: 0.7rem 2.5rem;
            border-radius: 10px;
            font-size: 1.15rem;
            letter-spacing: 1px;
            transition: background 0.2s, color 0.2s;
            margin-right: 1rem;
            margin-top: 1rem;
        }

        .edit-btn:hover {
            background: #00c3c3;
            color: #fff;
        }

        .edit-add-btn {
            background: transparent;
            color: #0ef;
            border: 1.5px dashed #0ef;
            border-radius: 8px;
            padding: 0.4rem 1.7rem;
            margin-bottom: 1.2rem;
            margin-top: 0.7rem;
            font-size: 1.05rem;
            transition: background 0.2s, color 0.2s;
        }

        .edit-add-btn:hover {
            background: #0ef;
            color: #081b29;
        }

        .edit-card .border {
            background: rgba(8, 27, 41, 0.95);
            border-radius: 12px;
            border: 1.5px solid #0ef;
            margin-bottom: 1.2rem;
            padding: 1.2rem 1rem;
        }

        .edit-card textarea {
            position: relative;
            margin-left: 10px;
            min-width: 100px;
            min-height: 100px;
            resize: vertical;
        }

        .edit-del-btn {
            background: #ff4d4d;
            color: #fff;
            border: none;
            font-weight: bold;
            padding: 0.4rem 1.2rem;
            border-radius: 8px;
            font-size: 1rem;
            margin-left: 1rem;
            margin-top: 0.5rem;
            transition: background 0.2s;
        }

        .edit-del-btn:hover {
            background: #b30000;
            color: #fff;
        }

        .biodata-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.2rem 2rem;
        }

        @media (max-width: 768px) {
            .edit-card {
                padding: 1.2rem 0.5rem 1.5rem 0.5rem;
            }

            .edit-section-title {
                font-size: 1.2rem;
            }

            .biodata-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <div class="container py-4">
        <h2 class="text-center mb-4" style="color:rgb(0, 0, 0);letter-spacing:2px;"></h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="edit-card">
                <div class="edit-section-title">Profil</div>
                <div class="mb-3">
                    <label for="home_image" class="form-label">Image Profil:</label>
                    <input class="form-control" type="file" name="home_image" id="home_image" accept="image/*">

                    {{-- Preview setelah pilih gambar --}}
                    <img id="preview_home_image" src="#" alt="Preview Gambar"
                        style="display:none; margin-top:10px; max-width: 180px; max-height: 180px; border-radius: 10px; border: 2px solid #0ef;" />

                    {{-- Jika sudah ada gambar sebelumnya --}}
                    @if ($content && $content->image)
                        <div>
                            <img src="{{ asset('storage/' . $content->image) }}"
                                style="margin-top:10px; max-width: 180px; max-height: 180px; border-radius: 10px; border: 2px solid #0ef;" />
                        </div>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="home_description" class="form-label">Deskripsi Profil:</label>
                    <textarea class="form-control" name="home_description" id="home_description" rows="3">{{ $content ? $content->description : '' }}</textarea>
                </div>
            </div>

            {{-- <div class="edit-card">
                <div class="edit-section-title">Tentang Kami</div>
                <div class="mb-3">
                    <label for="about_image" class="form-label">Image Tentang Kami:</label>
                    <input class="form-control" type="file" name="about_image" id="about_image">
                    @if ($aboutContent && $aboutContent->image)
                        <div>
                            <img src="{{ asset('storage/' . $aboutContent->image) }}" alt="Current Image" width="120">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="about_description" class="form-label">Deskripsi Tentang Kami:</label>
                    <textarea class="form-control" name="about_description" id="about_description" rows="3">{{ $aboutContent ? $aboutContent->description : '' }}</textarea>
                </div>
            </div> --}}

            <div class="edit-card">
                <div class="edit-section-title">Portofolio</div>
                @foreach ($portfolios as $idx => $portfolio)
                    <div
                        class="border rounded p-3 mb-3 d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                        <div class="flex-grow-1 w-100">
                            <input type="hidden" name="portfolio_id[]" value="{{ $portfolio->id }}">
                            <div class="mb-2">
                                <label class="form-label">Judul:</label>
                                <input class="form-control" type="text" name="portfolio_title[]"
                                    value="{{ $portfolio->title }}">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Gambar:</label>
                                <input class="form-control" type="file" name="portfolio_image[]">
                                @if ($portfolio->image)
                                    <div>
                                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Current Image"
                                            width="100">
                                    </div>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Deskripsi:</label>
                                <textarea class="form-control" name="portfolio_description[]" rows="7">{{ $portfolio->description }}</textarea>
                            </div>
                        </div>
                        <div class="text-end mt-2 mt-md-0 ms-md-3">
                            <button type="submit" name="delete_portfolio_id" value="{{ $portfolio->id }}"
                                class="edit-del-btn"
                                onclick="return confirm('Yakin ingin menghapus portofolio ini?')">Hapus</button>
                        </div>
                    </div>
                @endforeach
                <div class="edit-section-title" style="font-size:1.1rem;">Tambah Portofolio Baru</div>
                <div id="new-portfolios"></div>
                <button type="button" class="edit-add-btn" id="add-portfolio-btn">+ Tambah Portofolio</button>
            </div>

            <div class="edit-card">
                <div class="edit-section-title">Biodata</div>
                <div class="biodata-grid">
                    <div>
                        <label for="about_name" class="form-label">Nama Lengkap:</label>
                        <input class="form-control" type="text" name="about_name" id="about_name"
                            value="{{ $aboutContent->name ?? '' }}">
                    </div>
                    <div>
                        <label for="about_birth" class="form-label">Tanggal Lahir:</label>
                        <input class="form-control" type="date" name="about_birth" id="about_birth"
                            value="{{ $aboutContent->birth ?? '' }}">
                    </div>
                    <div>
                        <label for="about_address" class="form-label">Alamat:</label>
                        <input class="form-control" type="text" name="about_address" id="about_address"
                            value="{{ $aboutContent->address ?? '' }}">
                    </div>
                    <div>
                        <label for="about_phone" class="form-label">Nomor Telepon:</label>
                        <input class="form-control" type="text" name="about_phone" id="about_phone"
                            value="{{ $aboutContent->phone ?? '' }}">
                    </div>
                    <div>
                        <label for="about_gender" class="form-label">Jenis Kelamin:</label>
                        <select class="form-control" name="about_gender" id="about_gender">
                            <option value="" {{ empty($aboutContent->gender) ? 'selected' : '' }}>Pilih</option>
                            <option value="Laki-laki" {{ $aboutContent->gender == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki</option>
                            <option value="Perempuan" {{ $aboutContent->gender == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan</option>
                        </select>
                    </div>
                </div>

                {{-- Gambar Biodata --}}
                <div class="mb-3 mt-3">
                    <label for="about_image" class="form-label">Foto Biodata:</label>
                    <input class="form-control" type="file" name="about_image" id="about_image">

                    @if (!empty($aboutContent->image))
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $aboutContent->image) }}" alt="Foto Biodata" width="120"
                                style="border-radius: 8px; border: 1px solid #ccc;">
                        </div>
                    @endif
                </div>

                {{-- Deskripsi --}}
                <div class="mb-3">
                    <label for="about_description" class="form-label">Deskripsi Biodata:</label>
                    <textarea class="form-control" name="about_description" id="about_description" rows="6">{{ $aboutContent->description ?? '' }}</textarea>
                </div>
            </div>


            <div class="text-center">
                <button type="submit" class="edit-btn text-center">Simpan Semua</button>
                <a href="{{ route('home.index') }}" class="edit-btn text-center"
                    style="background:#081b29;color:#0ef;border:1px solid #0ef;">Batal</a>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addBtn = document.getElementById('add-portfolio-btn');
            if (addBtn) {
                addBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    let html = `
            <div class="border rounded p-3 mb-3">
                <div class="mb-2">
                    <label class="form-label">Judul:</label>
                    <input class="form-control" type="text" name="new_portfolio_title[]">
                </div>
                <div class="mb-2">
                    <label class="form-label">Gambar:</label>
                    <input class="form-control" type="file" name="new_portfolio_image[]">
                </div>
                <div class="mb-2">
                    <label class="form-label">Deskripsi:</label>
                    <textarea class="form-control" name="new_portfolio_description[]" rows="7"></textarea>
                </div>
            </div>
            `;
                    document.getElementById('new-portfolios').insertAdjacentHTML('beforeend', html);
                });
            }
        });

        document.getElementById('home_image').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('preview_home_image');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        });
    </script>
@endsection
