<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Executive;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $executives = Executive::orderByDesc('id')->get();
        return view('admin.executive.index', compact('executives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.executive.create');
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


        Executive::create($request->all());

        $notification = array(
            'message' => 'Executive Create Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.executive.index')->with($notification);
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
        $executive = Executive::find($id);
        return view('admin.executive.create', compact('executive'));
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

        Executive::find($id)->update([
            'name' => $request->name,
            'designation' => $request->designation
        ]);

        $notification = array(
            'message' => 'Executive Update Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.executive.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $executive = Executive::find($id);
        $executive->delete();

        $notification = array(
            'message' => 'Executive Delete Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.executive.index')->with($notification);
    }
}
