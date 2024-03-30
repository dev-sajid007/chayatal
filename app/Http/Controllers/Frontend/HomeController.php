<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['banners']      = Banner::where('status',1)->get();
        $data['testimonials'] = Testimonial::where('status',1)->get();
       
        return view('frontend.index',$data);
    }
}
