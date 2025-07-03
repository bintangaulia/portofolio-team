<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function create()
    {
        return view('portfolio_create');
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            $portfolio->image = $request->file('image')->store('portfolio_images', 'public');
        }
        $portfolio->save();
        return redirect()->route('home.index')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio_edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $portfolio->image = $request->file('image')->store('portfolio_images', 'public');
        }
        $portfolio->save();
        return redirect()->route('home.index')->with('success', 'Portofolio berhasil diupdate!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }
        $portfolio->delete();
        return redirect()->route('profile.edit')->with('success', 'Portofolio berhasil dihapus!');
    }
}
