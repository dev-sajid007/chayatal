<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Traits\ImageSaver;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $events = Event::all();
        return view('admin.website.event.index',compact('events'));
    }


    public function create()
    {
        return view('admin.website.event.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
        ]);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date'  => $request->date,
            'start_time'  => $request->start_time,
            'end_time'  => $request->end_time,
            'location'  => $request->location,
        ]);


        if ($request->hasFile('photo')) {
            $this->upload_file($request->file('photo'), $event, 'photo', 'events');
        }

        $notification = array(
            'message' => 'Event Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.website.event.index')->with($notification);
    }


    public function status(Request $request)
    {
        if ($request->mode == 'true') {
            Event::where('id', $request->id)->update(['status' => '1']);
        } else {
            Event::where('id', $request->id)->update(['status' => '0']);
        }

        return response()->json(['msg' => 'Successfully Updated Status', 'status' => 'true']);
    }


    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.website.event.create',compact('event'));
    }


    public function update(Request $request,$id)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
        ]);


        $event = Event::find($id);

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'date'  => $request->date,
            'start_time'  => $request->start_time,
            'end_time'  => $request->end_time,
            'location'  => $request->location,
        ]);


        if ($request->hasFile('photo')) {
            $this->upload_file($request->file('photo'), $event, 'photo', 'events');
        }


        $notification = array(
            'message' => 'Event Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.website.event.index')->with($notification);
    }


    public function delete($id)
    {
        $event = Event::find($id);

        if($event->photo){
            if (File::exists($event->photo)) {
                File::delete($event->photo);
            }
        }

        $event->delete();

        $notification = array(
            'message' => 'Event Deleted Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
}
