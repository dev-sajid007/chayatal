<?php

namespace App\Http\Controllers\Frontend;

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
        return view('frontend.page.media',compact('medias'));
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
}
