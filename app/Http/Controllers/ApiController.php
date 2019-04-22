<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Singer;
use App\Song;
use http\Env\Response;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function getSongs(){
        $songs=Song::OrderBy('id', 'desc')->with('singer')->with('album')->with('category')->paginate('10');
        return response()->json($songs);
    }
    public function getSingers(){
        $singers=Singer::Orderby('id','desc')->get();
        return response()->json($singers);
    }
    public function getAlbums(){
        $albums=Album::OrderBy('id','desc')->get();
        return response()->json($albums);
    }
    public function getCategory(){
        $category=Category::OrderBy('id','desc')->get();
        return response()->json($category);
    }
    public function getSearch($q){
        $song=Song::where('id','LIKE',"%$q%")->orwhere('song_name','LIKE',"%$q%")->orwhere('singer_id','LIKE',"%$q%")->orwhere('album_id','LIKE',"%$q%")->orwhere('category_id','LIKE',"%$q%")->orwhere('song_file','LIKE',"%$q%")->with('singer')->with('album')->with('category')->get();
            return response()->json($song);



    }
}
