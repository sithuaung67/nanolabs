@extends('admin.layouts.master')

@section('title')
    Show All Data
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-database"></span> <a href="{{url('/admin/showData')}}" style="color: #0f0f0f"> All Data</a>

            </h1>
            <div class="row">
                <div class="col-md-12 text-right">
                    <form class="form-inline" action="{{route("search.all")}}" method="get">
                        <input type="date" style="height: 30px" id="date" name="date" class="form-control">
                        <select style="height: 30px;" class="form-control" id="department" name="department" >
                            <option value="">Show All Department</option>
                            @foreach($cat as $cats)
                                <option value="{{$cats->cat_name}}"> {{$cats->cat_name}}  </option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary" style="color: white;height: 30px" type="submit"><i class="fa fa-search"></i></button>
                        @csrf
                    </form>
                </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if(Session('info'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                        </div>
                    </div>
                @endif
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             All Data
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" id="data_table">
                                <thead>
                                <tr style="background: grey ;color:#fff; font-weight: bold">
                                <tr>
                                    <td>Letter No</td>
                                    <td>Title</td>
                                    <td>Department</td>
                                    <td>Main File Name</td>
                                    <td>Date Time</td>
                                    <td>Action</td>

                                </tr>
                                </thead>
                                @foreach($songs as $song)
                                    <tr>
                                        <td><a href="{{route('view.data',['id'=>$song->id])}}" style="color: #0f0f0f">{{$song->letter_no}}</a> </td>
                                        <td><a href="{{route('view.data',['id'=>$song->id])}}" style="color: #0f0f0f">{{$song->title}}</a></td>
                                        <td>{{$song->department}}</td>
                                        <td>{{$song->receive_file_name}}</td>
                                        <td>{{$song->date}}</td>
                                        <td class="btn btn-default ">
                                            <!-- View -->
                                            <a href="{{route('view.data',['id'=>$song->id])}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span> </a>

                                            <a href="#" data-toggle="modal" data-target="#e{{$song->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="e{{$song->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <form method="post" action="{{route('update.data')}}">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background: blue;color: white">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit data  info for Letter No. <b>"{{$song->letter_no}}"</b></h4>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <input type="hidden" name="id" value="{{$song->id}}">

                                                                <div class="form-group has-feedback">
                                                                    <label for="department" class="control-label">Department</label>
                                                                    <select class="form-control" id="department" name="department" >
                                                                        @foreach($cat as $cats)
                                                                            <option value="{{$cats->cat_name}}"> {{$cats->cat_name}}  </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="letter_no" class="control-label">Letter Number</label>
                                                                    <input value="{{$song->letter_no}}" type="text" id="letter_no" name="letter_no" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="title" class="control-label">Title</label>
                                                                    <textarea name="title" id="title" class="form-control">{{$song->title}}</textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="receive_file" class="control-label">Received FileName</label>
                                                                    <textarea  class="form-control" id="receive_file" name="receive_file">{{$song->receive_file_name}}</textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="rmreceive_file" class="control-label">Remark Received FileName</label>
                                                                    <textarea  class="form-control" id="rmreceive_file" name="rmreceive_file">{{$song->remark_receive_file_name}}</textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="pdf_main_file" class="control-label">Main File</label>
                                                                    <input type="file" style="height: auto" class="form-control" id="pdf_main_file" name="pdf_main_file">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="pdf_remark_main_file" class="control-label">Remark Main File</label>
                                                                    <input type="file" style="height: auto" class="form-control" id="pdf_remark_main_file" name="pdf_remark_main_file">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="pdf_attach_file" class="control-label">Attach File</label>
                                                                    <input type="file" style="height: auto" class="form-control" id="pdf_attach_file" name="pdf_attach_file">
                                                                </div>
                                                            </div>

                                                                <div class="modal-footer bg-primary">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-default">Confirm</button>
                                                            </div>

                                                        </div>
                                                        {{csrf_field()}}
                                                    </form>
                                                </div>
                                            </div>



                                            <a href="#" data-toggle="modal" data-target="#d{{$song->id}}" class="text-danger btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="d{{$song->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <form method="post" action="{{route('data.delete')}}">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" style="color: red" id="myModalLabel"><i class="fa fa-warning" style="color: red"></i> confirm delete data</h4>
                                                            </div>
                                                            <div class="modal-body text-danger">
                                                                <input type="hidden" name="id" value="{{$song->id}}">
                                                                Are you sure want to delete this letter no of <b>"{{$song->letter_no}}"</b>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Confirm</button>
                                                            </div>

                                                        </div>
                                                        {{csrf_field()}}
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop
