<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function show($id)
    {
        $child = Child::find($id); 
        return view('frontend.page.child-details',compact('child'));
    }
}
