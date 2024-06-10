<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Report;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\File;

class ReportController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $reports = Report::all();
        return view('admin.report.index', compact('reports'));
    }


    public function create()
    {
        return view('admin.report.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'pdf' => 'required|mimes:pdf',
        ]);

        $report = new Report();
        $report->title = $request->title;
        $report->type = $request->type;
        $report->photo = "default.png";
        $report->pdf = "default.pdf";
        $report->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $report, 'photo', 'report', 370, 250);
        }

        if ($request->hasFile('pdf')) {
            try {
                $this->upload_file($request->file('pdf'), $report, 'pdf', 'report');
            } catch (Exception $e) {
                return $e;
            }
        }

        $notification = array(
            'message' => 'Report Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.report.index')->with($notification);
    }


    public function edit($id)
    {
        $report = Report::find($id);
        return view('admin.report.create',compact('report'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'pdf' => 'mimes:pdf',
        ]);

        $report = Report::find($id);
        $report->title = $request->title;
        $report->type  = $request->type;
        $report->photo = $report->photo;
        $report->pdf   = $report->pdf;
        $report->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $report, 'photo', 'report', 370, 250);
        }

        if ($request->hasFile('pdf')) {
            try {
                $this->upload_file($request->file('pdf'), $report, 'pdf', 'report');
            } catch (Exception $e) {
                return $e;
            }
        }

        $notification = array(
            'message' => 'Report Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.report.index')->with($notification);
    }


    public function delete(string $id)
    {
        $report = Report::find($id);


        if($report->photo){
            if (File::exists($report->photo)) {
                File::delete($report->photo);
            }
        }

        $report->delete();
        $notification = array(
            'message' => 'Report Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
