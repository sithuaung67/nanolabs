<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Invoice;
use App\Sale;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{

    public function postDeleteDepartment(Request $request){
        $id=$request['id'];
        $cat=Category::where('id', $id)->first();
        $cat->delete();
        return redirect()->back()->with('info', "The selected data have been deleted.");
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
    public function getShowData()
    {
        $cat=Category::all();
        $songs = Song::all();
        return view('showdata')->with(['cat'=>$cat])->with(['songs' => $songs]);
    }


    public function postData(Request $request)
    {
        $this->validate($request,[
            'department'=>'required',
            'letter_no'=>'required',
            'date'=>'required',
            'title'=>'required',
            'pdf_main_file'=>'required|mimes:pdf|max:10000',
            'pdf_remark_main_file'=>'required|mimes:pdf|max:10000',
            'receive_file'=>'required',
            'rmreceive_file'=>'required',
            'pdf_attach_file'=>'required|mimes:pdf|max:10000',
        ]);

        $data_file_name = $request['pdf_main_file'] . '.' . $request->file('pdf_main_file')->getClientOriginalExtension();
        $data_file = $request->file('pdf_main_file');

        $remark_data_file_name = $request['pdf_remark_main_file'] . '.' . $request->file('pdf_remark_main_file')->getClientOriginalExtension();
        $remark_data_file = $request->file('pdf_remark_main_file');

        $attach_data_file_name= $request['pdf_attach_file'] . '.' . $request->file('pdf_attach_file')->getClientOriginalExtension();
        $attach_data_file = $request->file('pdf_attach_file');

        $data = new Song();
        $data->department = $request['department'];
        $data->letter_no = $request['letter_no'];
        $data->date = $request['date'];
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
    public function postDeleteData(Request $request){
        $id=$request['id'];
        $song=Song::where('id', $id)->first();
        $song->delete();
        return redirect()->back()->with('info', "The selected data have been deleted.");
    }
    public function postUpdateData(Request $request)
    {
        $main=$request->file('pdf_main_file');
        $remark_main=$request->file('pdf_remark_main_file');
        $attach=$request->file('pdf_attach_file');

        $id=$request['id'];
        $song=Song::whereId($id)->firstOrFail();
        if(!empty($main)){
            Storage::disk('DataFile')->delete($song->main_file);
            $data_file_name = $request['pdf_main_file'] . '.' . $request->file('pdf_main_file')->getClientOriginalExtension();
            $data_file = $request->file('pdf_main_file');
            Storage::disk('DataFile')->put($data_file_name, File::get($data_file));
        }
        if(!empty($remark_main)){
            Storage::disk('DataFile')->delete($song->remark_main_file);
            $remark_data_file_name = $request['pdf_remark_main_file'] . '.' . $request->file('pdf_remark_main_file')->getClientOriginalExtension();
            $remark_data_file = $request->file('pdf_remark_main_file');
            Storage::disk('DataFile')->put($remark_data_file_name, File::get($remark_data_file));
        }
        if(!empty($attach)){
            Storage::disk('DataFile')->delete($song->attach_file);
            $attach_file_name = $request['pdf_attach_file'] . '.' . $request->file('pdf_attach_file')->getClientOriginalExtension();
            $attach_file = $request->file('pdf_attach_file');
            Storage::disk('DataFile')->put($attach_file_name, File::get($attach_file));
        }
        $song->department=$request['department'];
        $song->letter_no=$request['letter_no'];
        $song->title=$request['title'];
        $song->receive_file_name=$request['receive_file'];
        $song->remark_receive_file_name=$request['rmreceive_file'];
        $song->update();
        return redirect()->route('showData');

    }

    public function getSearchDepartment(Request $request){
        $q=$request['department'];
        $cat=Category::all();
        $songs=Song::OrderBy('id','desc')->where('department',"LIKE","%$q%")->get();
        return view('showdata')->with(['songs'=>$songs,'cat'=>$cat]);
    }
    public function getSearchDate(Request $request){
        $date=$request['date'];
        $cat=Category::all();
        $songs=Song::OrderBy('id','desc')->where('date',"LIKE","%$date%")->get();
        return view('showdata')->with(['songs'=>$songs,'cat'=>$cat]);
    }

    public function getViewData(Request $request)
    {
        $id=$request['id'];
        $data = Song::whereId($id)->firstOrFail();
        return view('view')->with(['data' => $data]);
    }

    public function getBack(){
        $cat=Category::all();
        $songs=Song::OrderBy('id','desc')->get();
        return view('showdata')->with(['songs'=>$songs,'cat'=>$cat]);
    }

    public function getSearchAll(Request $request){
        $date=$request['date'];
        $department=$request['department'];
        $cat=Category::all();
        $songs=Song::OrderBy('id','desc')->where('date',"LIKE","%$date%")->where('department',"LIKE" ,"%$department%")->get();
        return view('showdata')->with(['songs'=>$songs,'cat'=>$cat]);
    }

}
