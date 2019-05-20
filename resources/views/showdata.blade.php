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
                <span class="fa fa-database"></span> All Data

            </h1>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                <form class="form-inline" action="{{route('search.date')}}" method="get">
                    <input type="date" style="height: 30px" id="q" name="q" class="form-control">
                    <button class="btn btn-primary" style="color: white;height: 30px" type="submit"><i class="fa fa-search"></i></button>
                    @csrf
                </form>
            </div>
                <div class="col-md-3">
                    <form class="form-inline" action="{{route('search.data')}}" method="get">
                        <select style="height: 30px;" class="form-control" id="q" name="q" >
                            <option value="">Select Department</option>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             All Data
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" id="data_table">
                                <thead>
                                <tr style="background: grey ;color:#fff; font-weight: bold">
                                <tr>
                                    <td>Id</td>
                                    <td>Department</td>
                                    <td>Letter No</td>
                                    <td>Date Time</td>
                                    <td>Title</td>
                                    <td>Main File</td>
                                    <td>Remark File</td>
                                    <td>Receive FileName</td>
                                    <td>Remark FileName</td>
                                    <td>Attach File</td>
                                    <td>Action</td>

                                </tr>
                                </thead>
                                @foreach($songs as $song)
                                    <tr>
                                        <td>{{$song->id}}</td>
                                        <td>{{$song->department}}</td>
                                        <td>{{$song->letter_no}}</td>
                                        <td>{{$song->date_time}}</td>
                                        <td>{{$song->title}}</td>
                                        <td>{{$song->main_file}}</td>
                                        <td>{{$song->remark_main_file}}</td>
                                        <td>{{$song->receive_file_name}}</td>
                                        <td>{{$song->remark_receive_file_name}}</td>
                                        <td>{{$song->attach_file}}</td>
                                        <td class="btn btn-default ">
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
                                                                    <input value="{{$song->letter_no}}" type="number" id="letter_no" name="letter_no" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="date_time" class="control-label">Date Time</label>
                                                                    <input type="date" style="height: auto" id="date_time" name="date_time" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="title" class="control-label">Title</label>
                                                                    <input value="{{$song->title}}" type="text" name="title" id="title" class="form-control">
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
                                                                    <label for="receive_file" class="control-label">Received FileName</label>
                                                                    <input value="{{$song->receive_file_name}}" type="text" class="form-control" id="receive_file" name="receive_file">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="rmreceive_file" class="control-label">Remark Received FileName</label>
                                                                    <input value="{{$song->remark_receive_file_name}}" type="text"  class="form-control" id="rmreceive_file" name="rmreceive_file">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="pdf_attach_file" class="control-label">Attach File</label>
                                                                    <input type="file" style="height: auto" class="form-control" id="pdf_attach_file" name="pdf_attach_file">
                                                                </div>
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
@stop

@section('script')

@stop
