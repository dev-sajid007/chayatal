<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function upcomingProjects()
    {
        $projects = Project::where('type', 'upcoming')->get();
        return view('frontend.page.upcoming-projects', compact('projects'));
    }


    public function singleProject($id)
    {
        $project = Project::find($id);
        return view('frontend.page.single-project', compact('project'));
    }


    public function runningProjects(){
        $projects = Project::where('type', 'running')->get();
        return view('frontend.page.running-projects', compact('projects'));
    }
    public function completedProjects(){
        $projects = Project::where('type', 'completed')->get();
        return view('frontend.page.completed-projects', compact('projects'));
    }
}
