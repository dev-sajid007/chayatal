<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index',compact('projects'));
    }


    public function create()
    {
        return view('admin.project.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png|max:5000',
            'thumbnail' => 'required|mimes:jpg,jpeg,png|max:5000',
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->type = $request->type;
        $project->photo = 'default.png';
        $project->thumbnail = 'default.png';
        $project->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $project, 'photo', 'project', 370, 250);
        }
        if ($request->hasFile('thumbnail')) {
            $this->uploadFileWithResize($request->file('thumbnail'), $project, 'thumbnail', 'project', 1200, 400);
        }

        $notification = array(
            'message' => 'Project Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.project.index')->with($notification);
    }


    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.create', compact('project'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
        ]);

        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->type = $request->type;
        $project->photo = $project->photo;
        $project->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $project, 'photo', 'project', 370, 250);
        }

        $notification = array(
            'message' => 'Project Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.project.index')->with($notification);
    }


    public function delete(string $id)
    {
        $project = Project::find($id);


        if($project->photo){
            if (File::exists($project->photo)) {
                File::delete($project->photo);
            }
        }

        $project->delete();
        $notification = array(
            'message' => 'Project Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.project.index')->with($notification);

    }
}
