@extends('admin.layouts.master')

@section('title')
    Customer
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-user-plus"></span> New Customer
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Admin Panel</a></li>
                <li class="active">New Customer</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('customers')}}" id="back_invoices_price" class="btn" style="background: #1e282c;color: #ffffff;"><i class="fa fa-backward"></i> Back</a>
            </div>

            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="{{route('post.customer.new')}}">

                    <div class="form-group has-feedback @if($errors->has('name')) has-error @endif">
                        <label for="name" class="control-label">Account Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('full_name')) has-error @endif">
                        <label for="full_name" class="control-label">Customer Name</label>
                        <input type="text" name="full_name" id="full_name" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('full_name')) <span class="help-block">{{$errors->first('full_name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('birthday')) has-error @endif">
                        <label for="birthday" class="control-label">Date Of Birth</label>
                        <input type="date" name="birthday" id="birthday" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('birthday')) <span class="help-block">{{$errors->first('birthday')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('phone')) has-error @endif">
                        <label for="phone" class="control-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('phone')) <span class="help-block">{{$errors->first('phone')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('shop')) has-error @endif">
                        <label for="shop" class="control-label">Shop</label>
                        <input type="text" name="shop" id="shop" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('shop')) <span class="help-block">{{$errors->first('shop')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('address')) has-error @endif">
                        <label for="address" class="control-label">Address</label>
                        <textarea name="address" id="address" class="form-control"></textarea>
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('address')) <span class="help-block">{{$errors->first('address')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('town')) has-error @endif">
                        <label for="town" class="control-label">Town</label>
                        <input type="text" name="town" id="town" class="form-control">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        @if($errors->has('town')) <span class="help-block">{{$errors->first('town')}}</span> @endif
                    </div>

                    <div class="form-group has-feedback @if($errors->has('nrc')) has-error @endif">
                        <label for="nrc" class="control-label">NRC</label>
                        <input type="text" name="nrc" id="nrc" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('nrc')) <span class="help-block">{{$errors->first('nrc')}}</span> @endif
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