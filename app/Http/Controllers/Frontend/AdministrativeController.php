<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HumanResource;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public function adviser()
    {
        $datas = HumanResource::where('type', 'adviser')->get();
        return view('frontend.page.administrative', compact('datas'));
    }

    public function executive()
    {
        $datas = HumanResource::where('type', 'executive')->get();
        return view('frontend.page.administrative', compact('datas'));
    }

    public function governingBody()
    {
        $datas = HumanResource::where('type', 'governing_body')->get();
        return view('frontend.page.administrative', compact('datas'));
    }
}
