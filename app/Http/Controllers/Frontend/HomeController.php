<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Child;
use App\Models\Event;
use App\Models\FooterContent;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\News;
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
        $data['menus']        = Menu::with('childs')->whereNull('parent_id')->get();
        $data['events']       = Event::where('status',true)->get();
        $data['newses']       = News::where('status',true)->get();
        $data['childs']       = Child::all();
        //dd($data['menus']->toArray());
        return view('frontend.index',$data);
    }


    public function getInvolved()
    {
        return view('frontend.page.get-involved');
    }
}
