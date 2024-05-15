<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('childs')->where('parent_id','=',null)->orderBy('order','ASC')->get();
        return view('admin.website.menu.index',compact('menus'));
    }


    public function create()
    {
        return view('admin.website.menu.create');
    }


    public function order(Request $request){
        $menuItemOrder = json_decode($request->get('order'));
        $this->ordermenu($menuItemOrder,null);
    }

    private function ordermenu(array $menuItems, $parentId){
        foreach ($menuItems as $index => $item){
            $menuItem = Menu::findOrFail($item->id);
            $menuItem->update([
               'order' => $index+1,
               'parent_id' => $parentId
            ]);
            if(isset($item->children)){
                $this->ordermenu($item->children,$menuItem->id);
            }
        }
    }


    public function store(Request $request)
    {

        Menu::create([
            'title' => $request->title,
            'url' => $request->url,
            'target' => $request->target,
        ]);
        //notification
        $notification = array(
            'message' => 'Menu Item Added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.menu.index')->with($notification);
    }
}
