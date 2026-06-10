<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // prendo le categorie
        $categories = Category::all();
        $tags = Tag::all();

        return view("admin.projects.create", compact("categories","tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->client = $data['client'];
        $newProject->period = $data['period'];
        $newProject->category_id = $data['category_id'];
        $newProject->description = $data['description'];

        $newProject->save();

        // verifichiamo se ci sono tags
        if($request->has('tags')){
            
            // sync tags tabella
            $newProject->tags()->attach($data['tags']);
        }


        return redirect()->route('admin.projects.show', $newProject);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view("admin.projects.edit", compact('project',"categories",'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->title = $data['title'];
        $project->client = $data['client'];
        $project->period = $data['period'];
        $project->category_id = $data['category_id'];
        $project->description = $data['description'];

        $project->update();

        // verifichiamo se ci sono tags
        if($request->has('tags')){
            
            // sync tags tabella
            $project->tags()->sync($data['tags']);

        } else {
            // se non ci sono i tags si tolgono i tags dalla tabella ponte
            $project->tags()->detach();
        }
        
        return redirect()->route('admin.projects.show',$project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("admin.projects.index");
    }
}
