@extends('admin.layouts.master')

@section('title')
    Singer
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-microphone"></span> Singer
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Singer</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Singer data
                        </div>
                        <div class="panel-body">
                            <div class="table">
                                <table class="table table-hover">
                                    <tr>
                                        <td>Id</td>
                                        <td>Singer Name</td>
                                        <td>Created Dated</td>
                                        <td>Edit</td>
                                    </tr>
                                    @foreach($singer as $singers)
                                        <tr>
                                            <td>{{$singers->id}}</td>
                                            <td>{{$singers->singer_name}}</td>
                                            <td>{{$singers->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#e{{$singers->id}}">Edit</a>
                                                <input type="hidden" name="id" value="{{$singers->id}}">
                                                <div class="modal" id="e{{$singers->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form method="post" action="{{route('updateSinger',['singer'=>$singers->id])}}" >
                                                                  <div class="form-group">
                                                                      <label for="singer_name" class="control-label">Singer Name</label>
                                                                      <input value="{{$singers->singer_name}}" type="text" id="singer_name" name="singer_name" class="form-control">
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                                                  </div>
                                                                  @csrf
                                                              </form>
                                                            </div>

                                                        </div>
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
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Singer Category
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{route('postSinger')}}">
                                <div class="form-group">
                                    <label for="singer_name" class="control-label" >Singer Name</label>
                                    <input type="text" id="singer_name" name="singer_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Create</button>
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