<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function index() {

        // seleziona i progetti con tags e categorie
        $projects = Project::with('category','tags')->get();

        return response()->json([
            "success" => true,
            "data"=>$projects
        ]);
    }

    public function show(Project $project){
        $project->load('category','tags');

        return response()->json([
            "success" => true,
            "data" => $project
        ]);
    }
}
