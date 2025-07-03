<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutContent;
use Illuminate\Support\Facades\Storage;

class AboutContentController extends Controller
{
    public function edit()
    {
        $aboutContent = AboutContent::first();
        return view('about_edit', compact('aboutContent'));
    }

    public function update(Request $request)
    {
        $about = AboutContent::first(); // atau sesuai logic kamu

        // Validasi
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // validasi lainnya seperti name, birth, dsb.
        ]);

        // Simpan gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about_images', 'public');
            $about->image = $imagePath;
        }

        // Update data lainnya
        $about->description = $request->input('description');
        $about->name = $request->input('name');
        $about->birth = $request->input('birth');
        $about->address = $request->input('address');
        $about->phone = $request->input('phone');
        $about->gender = $request->input('gender');
        $about->save();

        return redirect()->back()->with('success', 'Biodata berhasil diperbarui');
    }
}
