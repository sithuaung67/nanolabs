<?php

namespace App\Http\Controllers;

use App\Category;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function getDepartment()
    {
        $cat = Category::OrderBy('id', 'desc')->get();
        return view('category')->with(['cat' => $cat]);
    }

    public function postDepartment(Request $request)
    {
        $cat = new Category();
        $cat->cat_name = $request['cat_name'];
        $cat->save();
        return redirect()->back();
    }

    public function updateDepartment(Request $request)
    {
        $id = $request['id'];
        $cat = Category::whereId($id)->first();
        $cat->cat_name = $request['cat_name'];
        $cat->update();
        return redirect()->route('department');
    }



    public function getData()
    {
        $cat = Category::OrderBy('id', 'desc')->get();
        $song = Song::OrderBy('id', 'desc')->get();
        return view('data')->with(['cat' => $cat])->with(['song' => $song]);
    }


    public function postData(Request $request)
    {
        $this->validate($request,[
            'department'=>'required',
            'letter_no'=>'required',
            'date_time'=>'required',
            'title'=>'required',
            'pdf_main_file'=>'required|mimes:pdf|max:10000',
            'pdf_remark_main_file'=>'required|mimes:pdf|max:10000',
            'receive_file'=>'required',
            'rmreceive_file'=>'required',
            'pdf_attach_file'=>'required|mimes:pdf|max:10000',
        ]);

        $data_file_name = $request['main_file'] . '.' . $request->file('pdf_main_file')->getClientOriginalExtension();
        $data_file = $request->file('pdf_main_file');

        $remark_data_file_name = $request['remark_main_file'] . '.' . $request->file('remark_main_file')->getClientOriginalExtension();
        $remark_data_file = $request->file('remark_main_file');

        $attach_data_file_name= $request['attach_file'] . '.' . $request->file('attach_file')->getClientOriginalExtension();
        $attach_data_file = $request->file('attach_file');

        $data = new Song();
        $data->department = $request['department'];
        $data->letter_no = $request['letter_no'];
        $data->date_time = $request['date_time'];
        $data->title=$request['title'];
        $data->main_file=$data_file_name;
        $data->remark_main_file=$remark_data_file_name;
        $data->receive_file_name=$request['receive_file'];
        $data->remark_receive_file_name=$request['rmreceive_file'];
        $data->attach_file=$attach_data_file_name;
        $data->save();

        Storage::disk('DataFile')->put($data_file_name, File::get($data_file));
        Storage::disk('DataFile')->put($remark_data_file_name, File::get($remark_data_file));
        Storage::disk('DataFile')->put($attach_data_file_name, File::get($attach_data_file));
        return redirect()->back()->with(['info'=>'Data Collect Successful']);
    }

}