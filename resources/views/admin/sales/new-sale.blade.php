@extends('admin.layouts.master')

@section('title')
    Sale User
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-user-plus"></span> New Sale User
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Admin Panel</a></li>
                <li class="active">New Slae User</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('sales')}}" class="btn" id="back_invoices_price" style="background: #1e282c;color: #ffffff;"><i class="fa fa-backward"></i> Back</a>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="">

                    <div class="form-group has-feedback @if($errors->has('name')) has-error @endif">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('user_name')) has-error @endif">
                        <label for="user_name" class="control-label">User Name</label>
                        <input type="text" name="user_name" id="user_name" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('user_name')) <span class="help-block">{{$errors->first('user_name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('birthday')) has-error @endif">
                        <label for="birthday" class="control-label">Date Of Birth</label>
                        <input type="text" name="birthday" id="birthday" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('birthday')) <span class="help-block">{{$errors->first('birthday')}}</span> @endif
                    </div>
                    <script>
                        $('#birthday').datepicker({
                            format: 'dd/mm/yyyy'
                        });
                    </script>
                    <div class="form-group has-feedback @if($errors->has('phone')) has-error @endif">
                        <label for="phone" class="control-label">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('phone')) <span class="help-block">{{$errors->first('phone')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('address')) has-error @endif">
                        <label for="address" class="control-label">Address</label>
                        <textarea name="address" id="address" class="form-control"></textarea>
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('address')) <span class="help-block">{{$errors->first('address')}}</span> @endif
                    </div>
                    {{--<div class="form-group has-feedback @if($errors->has('password')) has-error @endif">--}}
                        {{--<label for="password" class="control-label">Password</label>--}}
                        {{--<input  type="password" name="password" id="password" class="form-control">--}}
                        {{--<span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
                        {{--@if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span> @endif--}}
                    {{--</div>--}}
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