<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $projectsCount = Project::count();
        return view('admin.index', compact('projectsCount'));
    }

    public function profile(){
        return view('admin.profile');
    }
}
