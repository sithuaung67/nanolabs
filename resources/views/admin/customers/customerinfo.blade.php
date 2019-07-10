@extends('admin.layouts.master')

@section('title')
    Customer Account Setting
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-cog"></span> Customer Account Setting
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-cog"></i> Admin Panel</a></li>
                <li class="active">Customer Account Setting</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('customers')}}" class="btn" style="background: #1e282c;color: #ffffff;"><i class="fa fa-backward"></i> Back Customer</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{route('customers.invoice.history',['id'=>$customers->id])}}" class="btn" style="background: #1e282c;color: #ffffff;">Customer Invoice <i class="fa fa-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-header">
            </div>
            <div class="col-md-4 col-md-offset-4 table-responsive">

                <div class="text-center">
                    <span class="fa fa-user-circle fa-5x"></span>
                </div>
                <br>
                <table class="table table-hover" style="background: floralwhite">
                    <tbody>
                    <tr>
                        <td class="col-md-4">ID</td>
                        <td style="color: #1c00cf">{{$customers->id}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">User Name</td>
                        <td style="color: #1c00cf">{{$customers->user_name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Customer Name</td>
                        <td style="color: #1c00cf">{{$customers->customer_name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Date Of Birthday</td>
                        <td style="color: #1c00cf">{{date("d-M-Y", strtotime($customers->birthday))}}</td>

                    </tr>
                    <tr>
                        <td class="col-md-4">Phone</td>
                        <td style="color: #1c00cf">{{$customers->phone}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Shop Name</td>
                        <td style="color: #1c00cf">{{$customers->shop}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Address</td>
                        <td style="color: #1c00cf">{{$customers->address}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Township</td>
                        <td style="color: #1c00cf">{{$customers->town}}</td>
                    </tr>

                    <tr>
                        <td>
                            <a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-sm btn-block" style="background: #1e282c;color: #ffffff;">Change Password</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" action="{{route('password.update.customer')}}">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Change Your Password</h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$customers->id}}">
                                    <div class="form-group">
                                        <label for="new_password" class="control-label">New Password</label>
                                        <input required type="password" name="new_password" id="new_password" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn" style="background: #1e282c;color: #ffffff;">Save changes</button>
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