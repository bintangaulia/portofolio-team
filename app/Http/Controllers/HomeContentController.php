<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\AboutContent;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class HomeContentController extends Controller
{
    public function index()
    {
        $content = HomeContent::first();
        $aboutContent = AboutContent::first();
        $portfolios = Portfolio::all();
        return view('home', compact('content', 'aboutContent', 'portfolios'));
    }

    public function edit()
    {
        $content = HomeContent::first();
        return view('home_edit', compact('content'));
    }

    public function update(Request $request)
    {
        $content = HomeContent::first();
        if (!$content) {
            $content = new HomeContent();
        }
        $content->description = $request->description;
        if ($request->hasFile('image')) {
            if ($content->image) {
                Storage::disk('public')->delete($content->image);
            }
            $content->image = $request->file('image')->store('home_images', 'public');
        }
        $content->save();
        return redirect()->route('home.index')->with('success', 'Home updated!');
    }
}
