@extends('admin.layouts.master')

@section('title')
    Data Form
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-database"></span> Data
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Data</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-primary">
                      <div class="panel-heading"><span class="fa fa-database"></span>
                          Data upload
                      </div>
                      @if(Session('info'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{Session('info')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      @endif
                      <div class="panel-body">
                          <form method="post" action="{{route('postData')}}" enctype="multipart/form-data">

                              <div class="form-group">
                                  <label for="department" class="control-label">Department</label>
                                  <select class="form-control" id="department" name="department" >
                                      <option value="">select department</option>
                                      @foreach($cat as $cats)
                                          <option value="{{$cats->cat_name}}"> {{$cats->cat_name}}  </option>
                                      @endforeach
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for="letter_no" class="control-label">Letter Number</label>
                                  <input type="number" id="letter_no" name="letter_no" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="date_time" class="control-label">Date Time</label>
                                  <input type="date" style="height: auto" id="date_time" name="date_time" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="title" class="control-label">Title</label>
                                  <input type="text" name="title" id="title" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="main_file" class="control-label">Main File</label>
                                  <input type="file" style="height: auto" class="form-control" id="main_file" name="main_file">
                              </div>

                              <div class="form-group">
                                  <label for="remark_main_file" class="control-label">Remark Main File</label>
                                  <input type="file" style="height: auto" class="form-control" id="remark_main_file" name="remark_main_file">
                              </div>

                              <div class="form-group">
                                  <label for="receive_file" class="control-label">Received FileName</label>
                                  <input type="text" class="form-control" id="receive_file" name="receive_file">
                              </div>

                              <div class="form-group">
                                  <label for="rmreceive_file" class="control-label">Remark Received FileName</label>
                                  <input type="text"  class="form-control" id="rmreceive_file" name="rmreceive_file">
                              </div>

                              <div class="form-group">
                                  <label for="attach_file" class="control-label">Attach File</label>
                                  <input type="file" style="height: auto" class="form-control" id="attach_file" name="attach_file">
                              </div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary btn-block">Save</button>
                              </div>
                              @csrf
                          </form>
                      </div>
                  </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop