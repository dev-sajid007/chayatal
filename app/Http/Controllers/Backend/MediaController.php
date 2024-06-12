<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::get()->map(function($item){
            return [
                'id' => $item->id,
                'link' => $item->link,
                'code' => $this->getYouTubeVideoID($item->link)
            ];
        });
       
        return view('admin.media.index',compact('medias'));
    }


    public  function getYouTubeVideoID($url)
    {
        $video_id = false;
        $url_components = parse_url($url);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
            if (isset($params['v']) && !empty($params['v'])) {
                $video_id = $params['v'];
            } elseif (isset($params['vi']) && !empty($params['vi'])) {
                $video_id = $params['vi'];
            }
        }
        return $video_id;
    }


    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => "required"
        ]);

        $data = $request->all();
        Media::create($data);

        $notification = array(
            'message' => 'Media Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.media.index')->with($notification);
    }


    public function edit($id)
    {
        $media = Media::find($id);
        return view('admin.media.create',compact('media'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'link' => "required"
        ]);

        $data = $request->all();
        $media = Media::find($id);
        $media->update($data);

        $notification = array(
            'message' => 'Media Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.media.index')->with($notification);
    }


    public function delete($id)
    {
        $media = Media::find($id);
        $media->delete();

        $notification = array(
            'message' => 'Media Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.media.index')->with($notification);
    }
}
