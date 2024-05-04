<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.website.event.index',compact('events'));
    }


    public function create()
    {
        return view('admin.website.event.create');
    }
}
