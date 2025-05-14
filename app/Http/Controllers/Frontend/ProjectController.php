<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.projects.index', compact('projects'));
    }
    public function show($id)
    {
        $project = Project::with(['images', 'videos'])->find($id);
        return view('frontend.pages.projects.show', compact('project'));
    }
}
