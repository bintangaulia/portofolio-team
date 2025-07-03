<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GroupProject;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class GroupProjectController extends Controller
{
    public function index()
    {
       return portfolio::all()->map(function ($project) {
            return [
                'title' => $project->title,
               'image' => $project->image ? 'uploads/about_images/' . basename($project->image) : null,
                'created_at' => $project->created_at, // Assuming 'image' is a path to the image
            ];
        });
    }
    
}
