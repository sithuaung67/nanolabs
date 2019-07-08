@extends('admin.layouts.master')

@section('title')
    Sale User
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-users"></span> Sale User
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> Admin Panel</a></li>
                <li class="active">Sale Users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('sale.new')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> New Sale User</a>
            </div>



            <table class="table table-hover" id="user_table">
                <thead>
                <tr style="background: grey ;color:#fff; font-weight: bold">
                    <td>ID</td>
                    <td>Account Name</td>
                    <td>Saler Name</td>
                    <td>Birthday</td>
                    <td>Phone</td>
                    <td>Shop</td>
                    <td>Address</td>
                    <td>Member Since</td>
                    {{--<td>Password</td>--}}
                    <td>Actions</td>
                </tr>
                </thead>
                @foreach($sale as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->user_name}}</td>
                        <td>{{$customer->sale_name}}</td>
                        <td>{{date("d-M-Y", strtotime($customer->birthday))}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->shop}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{date("d-M-Y", strtotime($customer->created_at))}}</td>
                        {{--<td>{{bcrypt($customer->password)}}</td>--}}
                        <td class="btn btn-default ">
                            <a href="#" data-toggle="modal" data-target="#e{{$customer->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="e{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="{{route('sale.update')}}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit customer account info for <b>"{{$customer->full_name}}"</b></h4>
                                            </div>
                                            <div class="modal-body text-left">
                                                <input type="hidden" name="id" value="{{$customer->id}}">
                                                <div class="form-group has-feedback @if($errors->has('name')) has-error @endif">
                                                    <label for="name" class="control-label">Account Name</label>
                                                    <input value="{{$customer->user_name}}" type="text" name="name" id="name" class="form-control">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                    @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('full_name')) has-error @endif">
                                                    <label for="full_name" class="control-label">Customer Name</label>
                                                    <input value="{{$customer->sale_name}}" type="text" name="full_name" id="full_name" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('full_name')) <span class="help-block">{{$errors->first('full_name')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('birthday')) has-error @endif">
                                                    <label for="birthday" class="control-label">Date Of Birth</label>
                                                    <input value="{{$customer->birthday}}" type="date" name="birthday" id="birthday" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('birthday')) <span class="help-block">{{$errors->first('birthday')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('phone')) has-error @endif">
                                                    <label for="phone" class="control-label">Phone</label>
                                                    <input value="{{$customer->phone}}" type="text" name="phone" id="phone" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('phone')) <span class="help-block">{{$errors->first('phone')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('shop')) has-error @endif">
                                                    <label for="shop" class="control-label">Shop</label>
                                                    <input value="{{$customer->shop}}" type="text" name="shop" id="shop" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('shop')) <span class="help-block">{{$errors->first('shop')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('address')) has-error @endif">
                                                    <label for="address" class="control-label">Address</label>
                                                    <textarea name="address" id="address" class="form-control">{{$customer->address}}</textarea>
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('address')) <span class="help-block">{{$errors->first('address')}}</span> @endif
                                                </div>

                                                <div class="form-group has-feedback @if($errors->has('password')) has-error @endif">
                                                    <label for="password" class="control-label">Password</label>
                                                    <input  type="password" name="password" id="password" class="form-control">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                    @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span> @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Confirm</button>
                                            </div>

                                        </div>
                                        @csrf
                                    </form>
                                </div>
                            </div>



                            <a href="#" data-toggle="modal" data-target="#d{{$customer->id}}" class="text-danger btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="d{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="{{route('sale.delete')}}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> confirm delete customer account</h4>
                                            </div>
                                            <div class="modal-body text-danger">
                                                <input type="hidden" name="id" value="{{$customer->id}}">
                                                Are you sure want to delete this customer account name of <b>"{{$customer->customer_name}}"</b>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Confirm</button>
                                            </div>

                                        </div>
                                        {{csrf_field()}}
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
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