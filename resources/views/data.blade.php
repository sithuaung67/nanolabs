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

                @if(Session('info'))
                <div class="alert alert-success alert-dismissible">
                    {{Session('info')}}
                    <a href="#" class="close" style="text-align: center" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Indicates a successful  post data.
                </div>
                @endif

                <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-primary">
                      <div class="panel-heading"><span class="fa fa-database"></span>
                          Data upload
                      </div>
                      <div class="panel-body">
                          <form method="post" action="{{route('postData')}}" enctype="multipart/form-data">

                              <div class="form-group has-feedback @if($errors->has('department')) has-error @endif">
                                  <label for="department" class="control-label">Department</label>
                                  <select class="form-control" id="department" name="department" >
                                      <option value="">select department</option>
                                      @foreach($cat as $cats)
                                          <option value="{{$cats->cat_name}}"> {{$cats->cat_name}}  </option>
                                      @endforeach
                                  </select>
                                  @if ($errors->has('department')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('department') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('letter_no')) has-error @endif">
                                  <label for="letter_no" class="control-label">Letter Number</label>
                                  <input type="number" id="letter_no" name="letter_no" class="form-control">
                                  @if ($errors->has('letter_no')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('letter_no') }}</p>
                                  @endif
                              </div>
                              <div class="form-group has-feedback @if($errors->has('date_time')) has-error @endif">
                                  <label for="date_time" class="control-label">Date Time</label>
                                  <input type="date" style="height: auto" id="date_time" name="date_time" class="form-control">
                                  <i class="fa fa-calendar form-control-feedback"></i>
                                  @if ($errors->has('date_time')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('date_time') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('title')) has-error @endif">
                                  <label for="title" class="control-label">Title</label>
                                  <input type="text" name="title" id="title" class="form-control">
                                  <i class="fa fa-file-text form-control-feedback"></i>
                                  @if ($errors->has('title')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('title') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('pdf_main_file')) has-error @endif">
                                  <label for="pdf_main_file" class="control-label">Main File</label>
                                  <input type="file" style="height: auto" class="form-control" id="pdf_main_file" name="pdf_main_file">
                                  <i class="fa fa-file-pdf-o form-control-feedback"></i>
                                  @if ($errors->has('pdf_main_file')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('pdf_main_file') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('pdf_remark_main_file')) has-error @endif">
                                  <label for="pdf_remark_main_file" class="control-label">Remark Main File</label>
                                  <input type="file" style="height: auto" class="form-control" id="pdf_remark_main_file" name="pdf_remark_main_file">
                                  <i class="fa fa-file-pdf-o form-control-feedback"></i>
                                  @if ($errors->has('pdf_remark_main_file')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('pdf_remark_main_file') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('receive_file')) has-error @endif">
                                  <label for="receive_file" class="control-label">Received FileName</label>
                                  <input type="text" class="form-control" id="receive_file" name="receive_file">
                                  <i class="fa fa-file-text form-control-feedback"></i>
                                  @if ($errors->has('receive_file')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('receive_file') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('rmreceive_file')) has-error @endif">
                                  <label for="rmreceive_file" class="control-label">Remark Received FileName</label>
                                  <input type="text"  class="form-control" id="rmreceive_file" name="rmreceive_file">
                                  <i class="fa fa-file-text form-control-feedback"></i>
                                  @if ($errors->has('rmreceive_file')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('rmreceive_file') }}</p>
                                  @endif
                              </div>

                              <div class="form-group has-feedback @if($errors->has('pdf_attach_file')) has-error @endif">
                                  <label for="pdf_attach_file" class="control-label">Attach File</label>
                                  <input type="file" style="height: auto" class="form-control" id="pdf_attach_file" name="pdf_attach_file">
                                  <i class="fa fa-file-pdf-o form-control-feedback"></i>
                                  @if ($errors->has('pdf_attach_file')) <p class="help-block"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                      {{ $errors->first('pdf_attach_file') }}</p>
                                  @endif
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