<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Singer;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SingerController extends Controller
{
    public function getCategory()
    {
        $cat = Category::OrderBy('id', 'desc')->get();
        return view('category')->with(['cat' => $cat]);
    }

    public function postCategory(Request $request)
    {
        $cat = new Category();
        $cat->cat_name = $request['cat_name'];
        $cat->save();
        return redirect()->back();
    }

    public function updateCategory(Request $request)
    {
        $id = $request['id'];
        $cat = Category::whereId($id)->first();
        $cat->cat_name = $request['cat_name'];
        $cat->update();
        return redirect()->route('category');
    }

    public function getSinger()
    {
        $singer = Singer::OrderBy('id', 'desc')->get();
        return view('singer')->with(['singer' => $singer]);
    }

    public function postSinger(Request $request)
    {
        $singer = new Singer();
        $singer->singer_name = $request['singer_name'];
        $singer->save();
        return redirect()->back();
    }

    public function updateSinger(Request $request)
    {
        $id = $request['id'];
        $singer = Singer::whereId($id)->first();
        $singer->singer_name = $request['singer_name'];
        $singer->update();
        return redirect()->route('singer');
    }

    public function getAlbum()
    {
        $album = Album::OrderBy('id', 'desc')->get();
        return view('album')->with(['album' => $album]);
    }

    public function postAlbum(Request $request)
    {
        $album = new Album();
        $album->album_name = $request['album_name'];
        $album->save();
        return redirect()->back();
    }

    public function getSong()
    {
        $singer = Singer::OrderBy('id', 'desc')->get();
        $cat = Category::OrderBy('id', 'desc')->get();
        $album = Album::OrderBy('id', 'desc')->get();
        $song = Song::OrderBy('id', 'desc')->get();
        return view('song')->with(['singer' => $singer])->with(['cat' => $cat])->with(['album' => $album])->with(['song' => $song]);
    }

    /**
     * @param Request $request
     */
    public function postSong(Request $request)
    {
        $song_file_name = date("d-m-y-h-i-s") . '.' . $request->file('song_file')->getClientOriginalExtension();
        $song_file = $request->file('song_file');

        $song = new Song();
        $song->song_name = $request['song_name'];
        $song->singer_id = $request['singer_name'];
        $song->album_id = $request['album_name'];
        $song->category_id = $request['cat_name'];
        $song->song_file = $song_file_name;
        $song->save();
        Storage::disk('songfile')->put($song_file_name, file::get($song_file));
        return redirect()->back();
    }

    public function deleteSong($id)
    {
        $song = Song::whereId($id)->first();
        $song->delete();
        return redirect()->back();
    }

    public function updateSong(Request $request)
    {
        $song_file_name = date("d-m-y-h-i-s") . '.' . $request->file('song_file')->getClientOriginalExtension();
        $song_file = $request->file('song_file');

        $id = $request['id'];
        $song = Song::whereId($id)->firstOrFail();
        $song->song_name = $request['song_name'];
        $song->singer_id = $request['singer_name'];
        $song->album_id = $request['album_name'];
        $song->category_id = $request['cat_name'];
        $song->song_file = $song_file_name;
        $song->update();

        Storage::disk('songfile')->put($song_file_name, file::get($song_file));
        return redirect()->route('song');
    }
    public function updateAlbum(Request $request)
     {   $id=$request['id'];
         $album=Album::whereId($id)->first();
        $album->album_name = $request['album_name'];
        $album->update();
        return redirect()->route('album');
    }
}