@extends('admin.layouts.master')

@section('title')
    Users
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-users"></span> Admin Users
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> Admin Panel</a></li>
                <li class="active">Users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel">
                        <div class="panel-heading" style="background: #1e282c;color: #fff0ff;"><h4>Notification</h4></div>
                        <div class="panel-body">
                            <form enctype="multipart/form-data" action="{{route('postNotificationOne')}}" method="post">
                                <div class="form-group">
                                    <label for="noti_date" class="control-label">Date</label>
                                    <input type="date" class="form-control" name="noti_date" id="noti_date">
                                </div>
                                <div class="form-group">
                                    <label for="title" class="control-label">About Notification Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="customer_id" class="control-label">Select Name</label>
                                    <select class="form-control" name="customer_id" id="customer_id">
                                        <option value="">Select Name</option>
                                        @foreach($customer as $cu)
                                            <option value="{{$cu->id}}">{{$cu->customer_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="noti" class="control-label">Noti Group</label>
                                    <textarea placeholder="about noti" style="height: 150px;" class="form-control" name="noti" id="noti"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn" style="background: #1e282c;color: #fff0ff;">Save</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @if(Session('info'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

    </div>
@stop

@section('script')

@stop