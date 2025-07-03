<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use App\Models\BiodataTeam;

class BiodataTeamController extends Controller
{
    /**
     * Display the first AboutContent entry as a JSON response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $about = \App\Models\AboutContent::first(); // Ambil dari tabel about_contents

        return response()->json([
            'data' => [
                [
                    'image' => $about->image ? asset('storage/' . $about->image) : null,
                    'name' => $about->name,
                    'birth' => $about->birth,
                    'address' => $about->address,
                    'phone' => $about->phone,
                    'gender' => $about->gender,
                    'description' => $about->description,
                ]
            ]
        ]);
    }



    public function show($id)
    {
        $biodata = BiodataTeam::findOrFail($id);
        return [
            'image' => $biodata->image
                ? asset('storage/' . $biodata->image)
                : null,
            'name' => $biodata->name,
            'birth' => $biodata->birth,
            'address' => $biodata->address,
            'phone' => $biodata->phone,
            'gender' => $biodata->gender,
            'description' => $biodata->description,
        ];
    }
}
