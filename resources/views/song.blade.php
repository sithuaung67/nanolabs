@extends('admin.layouts.master')

@section('title')
    Category
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-music"></span>Song
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Song</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Song data
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <td>Id</td>
                                <td>Song Name</td>
                                <td>Singer</td>
                                <td>Album</td>
                                <td>Category</td>
                                <td>Song File</td>
                                <td>Action</td>

                            </tr>
                            @foreach($song as $songs)
                                <tr>
                                    <td>{{$songs->id}}</td>
                                    <td>{{$songs->song_name}}</td>
                                    <td>{{$songs->singer->singer_name}}</td>
                                    <td>{{$songs->album->album_name}}</td>
                                    <td>{{$songs->category->cat_name}}</td>
                                    <td class="col-sm-3">
                                        @if($songs->song_file)
                                        <audio controls src="../songfiles/{{$songs->song_file}}"></audio>
                                        @endif
                                    </td>
                                    <td >
                                        <a href="{{route('deleteSong',['song'=>$songs->id])}}" class="btn btn-primary "><i class="fa fa-trash"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#e{{$songs->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <input type="hidden" name="id" id="{{$songs->id}}">
                                        <div class="modal" tabindex="-1" id="e{{$songs->id}}" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('updateSong',['song'=>$songs->id])}}" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="song_name" class="control-label">Song Name</label>
                                                                <input value="{{$songs->song_name}}" type="text" id="song_name" name="song_name" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="singer_name" class="control-label">Singer Name</label>
                                                                <select class="form-control" id="singer_name" name="singer_name" >
                                                                    <option value="">select singer</option>
                                                                    @foreach($singer as $singers)
                                                                        <option value="{{$singers->id}}">
                                                                            {{$singers->singer_name}} </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="album_name" class="control-label">Album Name</label>
                                                                <select class="form-control" id="album_name" name="album_name" >
                                                                    <option value="">select Album</option>
                                                                    @foreach($album as $albums)
                                                                        <option value="{{$albums->id}}">
                                                                            {{$albums->album_name}} </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cat_name" class="control-label">Category Name</label>
                                                                <select class="form-control" id="cat_name" name="cat_name" >
                                                                    <option value="">select category</option>
                                                                    @foreach($cat as $cats)
                                                                        <option value="{{$cats->id}}">
                                                                            {{$cats->cat_name}} </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="song_file" class="control-label">Song file</label>
                                                                <input type="file" class="form-control" id="song_file" name="song_file">
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
                <div class="col-md-3">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          Song upload
                      </div>
                      <div class="panel-body">
                          <form method="post" action="{{route('postSong')}}" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="song_name" class="control-label">Song Name</label>
                                  <input type="text" id="song_name" name="song_name" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="singer_name" class="control-label">Singer Name</label>
                                  <select class="form-control" id="singer_name" name="singer_name" >
                                      <option value="">select singer</option>
                                      @foreach($singer as $singers)
                                          <option value="{{$singers->id}}">
                                              {{$singers->singer_name}} </option>
                                          @endforeach

                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="album_name" class="control-label">Album Name</label>
                                  <select class="form-control" id="album_name" name="album_name" >
                                      <option value="">select Album</option>
                                      @foreach($album as $albums)
                                          <option value="{{$albums->id}}">
                                              {{$albums->album_name}} </option>
                                          @endforeach

                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="cat_name" class="control-label">Category Name</label>
                                  <select class="form-control" id="cat_name" name="cat_name" >
                                      <option value="">select category</option>
                                          @foreach($cat as $cats)
                                          <option value="{{$cats->id}}">
                                           {{$cats->cat_name}} </option>
                                          @endforeach

                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="song_file" class="control-label">Song file</label>
                                  <input type="file" class="form-control" id="song_file" name="song_file">
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