@extends('admin.layouts.master')

@section('title')
    User Account Setting
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-cog"></span> User Account Setting
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-cog"></i> Admin Panel</a></li>
                <li class="active">User Account Setting</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
            </div>
            <div class="col-md-4 col-md-offset-4">



                <div class="text-center">
                    <span class="fa fa-user-circle fa-5x"></span>

                </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">Full Name : <span class="text-primary">{{Auth::User()->full_name}}</span></li>
                    <li class="list-group-item">Username : <span class="text-primary">{{Auth::User()->name}}</span></li>
                    <li class="list-group-item">Email : <span class="text-primary">{{Auth::User()->email}}</span></li>
                    <li class="list-group-item">Role : <span class="text-primary">{{Auth::User()->roles->first()->name}}</span></li>
                    <li class="list-group-item">Member Since : <span class="text-primary">{{date('d-M-Y', strtotime(Auth::User()->created_at))}}</span></li>
                    <li class="list-group-item"><small><a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-primary btn-sm btn-block">Change Password</a></small></li>
                </ul>


                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" action="{{route('password.update')}}">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Change Your Password</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="new_password" class="control-label">New Password</label>
                                    <input required type="password" name="new_password" id="new_password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="new_password_again" class="control-label">New Password Again</label>
                                    <input required type="password" name="new_password_again" id="new_password_again" class="form-control">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        @if(Session('info'))
            <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
            </div>
            </div>
        @endif

        @if($errors->has('new_password'))
            <div class="tem alert alert-danger text-center navbar-fixed-bottom"><i class="fa fa-warning"></i>{{$errors->first('new_password')}}</div>
        @endif
        @if($errors->has('new_password_again'))
            <div class="tem alert alert-danger text-center navbar-fixed-bottom"><i class="fa fa-warning"></i>{{$errors->first('new_password_again')}}</div>
        @endif

    </div>
@stop

@section('script')

@stop