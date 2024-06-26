<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ChayatalNews;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class ChayatalNewsController extends Controller
{
    public function index()
    {
        $newses = ChayatalNews::all();
        return view('frontend.page.chayatal-news.index',compact('newses'));
    }


    public function singleNews($id)
    {
        $news = ChayatalNews::find($id);
        return view('frontend.page.chayatal-news.view',compact('news'));
    }
}
