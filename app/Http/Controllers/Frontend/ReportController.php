<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function monthlyReports()
    {
        $reports = Report::where("type",'monthly')->get();
        return view('frontend.page.reports.monthly-reports',compact('reports'));
    }
    public function annualReports()
    {
        $reports = Report::where("type",'annual')->get();
        return view('frontend.page.reports.annual-reports',compact('reports'));
    }
    public function auditReports()
    {
        $reports = Report::where("type",'audit')->get();
        return view('frontend.page.reports.audit-reports',compact('reports'));
    }
}
