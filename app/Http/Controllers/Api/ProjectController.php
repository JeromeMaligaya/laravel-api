<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with("technologies", "type")->get();

        return response()->json([
            "success" => true,
            "results" => $projects,
        ]);
    }

    public function show(Project $project)
    {
        $project = Project::with("technologies", "type")->findOrFail($project->id);

        return response()->json([
            "success" => true,
            "result" => $project
        ]);
    }
}