<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HumanResource;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public function index($type)
    {
        $datas = HumanResource::where('type', $type)->get();
        return view('frontend.page.administrative', compact('datas'));
    }
}
