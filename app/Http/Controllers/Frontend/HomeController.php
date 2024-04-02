<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Sponsor;
use App\Models\Testimonial;
use App\Models\WebInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['banners']      = Banner::where('status',1)->get();
        $data['testimonials'] = Testimonial::where('status',1)->get();
        $data['galleries']    = Gallery::where('status',1)->get();
        $data['sponsors']     = Sponsor::where('status',1)->get();
        $data['info']         = WebInfo::find(1);
       
        return view('frontend.index',$data);
    }
}
