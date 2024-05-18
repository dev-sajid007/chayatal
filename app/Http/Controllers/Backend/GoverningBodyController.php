<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HumanResource;
use Illuminate\Http\Request;

class GoverningBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $governings = HumanResource::where('type', 'governing_body')->get();
        return view('admin.governing.index', compact('governings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.governing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);


        HUmanResource::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'type' => 'governing_body'
        ]);

        $notification = array(
            'message' => 'Governing Body Added Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.governing_body.index')->with($notification);
    }
        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $governing = HumanResource::where('type', 'governing_body')->where('id',$id)->first();

        return view('admin.governing.create', compact('governing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'designation'  => 'required',
        ]);

        $governing = HUmanResource::where('type', 'governing_body')->where('id', $id)->first();
        $governing->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'type' => 'governing_body'
        ]);

        $notification = array(
            'message' => 'Governing Body Update Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.governing_body.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $governing_body = HUmanResource::where('type', 'governing_body')->where('id', $id)->first();
        $governing_body->delete();

        $notification = array(
            'message' => 'Governing Body Delete Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.governing_body.index')->with($notification);
    }
}
