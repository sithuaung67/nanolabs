
@extends('admin.layouts.master')

@section('title')
    Show All Detail
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-database"></span> Detail of <b>"{{$data->letter_no}}"</b>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active"> Detail of <b>"{{$data->letter_no}}"</b> </li>
            </ol>
        </section>

        <!-- Main content -->
        <section id="e" class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a href="{{route('back')}}" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                            <h4><span class="fa fa-database"></span>
                                Detail of Letter Number <b>"{{$data->letter_no}}"</b></h4>
                        </div>
                        <div class="panel-body table-responsive">
                            <form enctype="multipart/form-data">
                                <div class="form-group text-right">
                                    <b><i class="fa fa-id-card"></i> : {{$data->id}}<br>
                                     <span class="fa fa-calendar"></span> : {{$data->date}}<br>
                                        Letter Number :{{$data->letter_no}}</b>
                                </div>
                                <div class="row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="col-md-4">Department</td>
                                                <td>{{$data->department}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4">Title</td>
                                                <td>{{$data->title}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4">Received FileName</td>
                                                <td>{{$data->receive_file_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4">Remark FileName</td>
                                                <td>{{$data->remark_receive_file_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4">Main File</td>
                                                <td><a href="../Datas/{{$data->main_file}}" class="btn btn-primary btn-xs">PDF <i class="fa fa-download"></i></i> </a></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4">Remark Main File</td>
                                                <td><a href="../Datas/{{$data->main_file}}" class="btn btn-primary btn-xs">PDF <i class="fa fa-download"></i> </a></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-4">Attach File</td>
                                                <td><a href="../Datas/{{$data->main_file}}" class="btn btn-primary btn-xs">PDF <i class="fa fa-download"></i> </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            <div class="form-group text-right">
                                <a href="{{route('back')}}" class="btn btn-primary"> Back <span class="glyphicon glyphicon-circle-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop