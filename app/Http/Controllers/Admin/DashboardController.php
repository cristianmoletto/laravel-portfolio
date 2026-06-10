<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $projectsCount = Project::count();
        $categoriesCount = Category::count();
        return view('admin.index', compact('projectsCount','categoriesCount'));
    }

    public function profile(){
        return view('admin.profile');
    }
}
