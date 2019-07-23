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
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading" style="background: #1e282c;color: #fff0ff;">Notification</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>Account Name</td>
                                <td>Customer Name</td>
                                <td>Notification</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $total = 0; ?>
                            @foreach($customers as $cus)
                                <?php $total ++== $total; ?>
                                <tr>
                                    <td>{{$total}}</td>
                                    <td>{{$cus->user_name}}</td>
                                    <td>{{$cus->customer_name}}</td>
                                    <td>{{$cus->notification}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-heading" style="background: #1e282c;color: #fff0ff;">Notification</div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{route('postNotification')}}" method="post">
                            {{--<div class="form-group">--}}
                            {{--<label for="customer_name" class="control-label">Customer Name</label>--}}
                            {{--<select name="customer_name" id="customer_name" class="form-control">--}}
                            {{--<option value="">Select Customer</option>--}}
                            {{--@foreach($customers as $cus)--}}
                            {{--<option value="{{$cus->id}}">{{$cus->customer_name}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="about" class="control-label">About Notification</label>
                                <textarea style="height: 150px;" class="form-control" name="about" id="about" placeholder="Yow write about notification"></textarea>
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
        </section>

    </div>
@stop

@section('script')

@stop