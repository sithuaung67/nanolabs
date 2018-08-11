@extends('admin.layouts.master')

@section('title')
    Users
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-user-plus"></span> New User
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Admin Panel</a></li>
                <li class="active">New User</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('users')}}" class="btn btn-primary"><i class="fa fa-backward"></i> Back</a>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="{{route('user.new')}}">

                    <div class="form-group has-feedback @if($errors->has('full_name')) has-error @endif">
                        <label for="full_name" class="control-label">Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('full_name')) <span class="help-block">{{$errors->first('full_name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('name')) has-error @endif">
                        <label for="name" class="control-label">Username</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('email')) has-error @endif">
                        <label for="email" class="control-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('role')) has-error @endif">
                        <label for="role" class="control-label">Roles</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                                <option>{{$role->name}}</option>
                                @endforeach
                        </select>
                        <span class="fa fa-user-md form-control-feedback"></span>
                        @if($errors->has('role')) <span class="help-block">{{$errors->first('role')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('password')) has-error @endif">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span> @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Create</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>

        </section>
        @if(Session('info'))
            <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
            </div>
            </div>
        @endif

    </div>
@stop

@section('script')

@stop