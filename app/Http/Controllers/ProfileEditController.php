<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\AboutContent;
use App\Models\Portfolio;

class ProfileEditController extends Controller
{
    public function edit()
    {
        $content = HomeContent::first();
        $aboutContent = AboutContent::first();
        $portfolios = Portfolio::all();
        return view('profile_edit', compact('content', 'aboutContent', 'portfolios'));
    }

    public function update(Request $request)
    {
        // Update HomeContent
        $content = HomeContent::first() ?? new HomeContent();
        $content->description = $request->input('home_description');
        if ($request->hasFile('home_image')) {
            if ($content->image && file_exists(public_path('storage/' . $content->image))) {
                unlink(public_path('storage/' . $content->image));
            }
            $imagePath = $request->file('home_image')->store('uploads/home_images', 'public');
            $content->image = $imagePath;
        }

        $content->save();

        // Update AboutContent
        $aboutContent = AboutContent::first() ?? new AboutContent();
        $aboutContent->name = $request->input('about_name');
        $aboutContent->birth = $request->input('about_birth');
        $aboutContent->address = $request->input('about_address');
        $aboutContent->education = $request->input('about_education');
        $aboutContent->phone = $request->input('about_phone');
        $aboutContent->email = $request->input('about_email');
        $aboutContent->gender = $request->input('about_gender');
        $aboutContent->religion = $request->input('about_religion');
        $aboutContent->nationality = $request->input('about_nationality');
        $aboutContent->status = $request->input('about_status');
        $aboutContent->description = $request->input('about_description'); {
            if ($request->hasFile('about_image')) {
                $imagePath = $request->file('about_image')->store('about_images', 'public');
                $aboutContent->image = $imagePath;
            }
        }

        $aboutContent->save();

        // Update Portfolios
        if ($request->has('portfolio_id')) {
            foreach ($request->portfolio_id as $idx => $id) {
                $portfolio = Portfolio::find($id);
                if ($portfolio) {
                    $portfolio->title = $request->portfolio_title[$idx];
                    $portfolio->description = $request->portfolio_description[$idx];
                    if (
                        isset($request->portfolio_image[$idx]) &&
                        $request->hasFile("portfolio_image.$idx")
                    ) {
                        // Hapus file lama jika ada
                        if ($portfolio->image && file_exists(public_path('storage/' . $portfolio->image))) {
                            unlink(public_path('storage/' . $portfolio->image));
                        }
                        // Simpan file baru
                        $imagePath = $request->file("portfolio_image.$idx")->store('uploads/portfolio_images', 'public');
                        $portfolio->image = $imagePath;
                    }
                    $portfolio->save();
                }
            }
        }

        // Tambah Portofolio Baru
        if ($request->has('new_portfolio_title')) {
            foreach ($request->new_portfolio_title as $idx => $title) {
                if ($title) {
                    $portfolio = new Portfolio();
                    $portfolio->title = $title;
                    $portfolio->description = $request->new_portfolio_description[$idx];
                    if (
                        isset($request->new_portfolio_image[$idx]) &&
                        $request->hasFile("new_portfolio_image.$idx")
                    ) {
                        $image = $request->file("new_portfolio_image.$idx");
                        $imagePath = $image->store('uploads/portfolio_images', 'public');
                        $portfolio->image = $imagePath;
                    }
                    $portfolio->save();
                }
            }
        }

        // Hapus Portofolio
        if ($request->has('delete_portfolio_id')) {
            $portfolio = Portfolio::find($request->delete_portfolio_id);
            if ($portfolio) {
                if ($portfolio->image && file_exists(public_path($portfolio->image))) {
                    unlink(public_path($portfolio->image));
                }
                $portfolio->delete();
            }
            return redirect()->route('profile.edit')->with('success', 'Portofolio berhasil dihapus!');
        }

        return redirect()->route('home.index')->with('success', 'Profil, Tentang Kami, dan Portofolio berhasil diupdate!');
    }
}
