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
        <section class="content table-responsive" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('sale.new')}}" id="SearchButton" class="btn" style="background: #1e282c;color: #ffffff;"><i class="fa fa-plus-circle"></i> New Sale User</a>
            </div>

            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <form class="form-inline" action="{{route('search.sale')}}" method="get">
                        <input type="text" style="width: 130px;" placeholder="Date Of Birth" id="birthday2" name="birthday2" class="form-control">
                        <script>
                            $('#birthday2').datepicker({

                                format: 'dd/mm/yyyy'
                            });
                        </script>
                        {{--<select class="form-control" id="name" name="name" >--}}
                            {{--<option value="">Name</option>--}}
                            {{--@foreach($sale as $sal)--}}
                                {{--<option value="{{$sal->name}}"> {{$sal->name}}  </option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                        <input type="text" style="width: 130px;" placeholder="Name" id="name" name="name" class="form-control">

                        {{--<select class="form-control" id="user_name" name="user_name" >--}}
                            {{--<option value="">User Name</option>--}}
                            {{--@foreach($sale as $sal)--}}
                                {{--<option value="{{$sal->user_name}}"> {{$sal->user_name}}  </option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                        <input type="text" style="width: 130px;" placeholder="User Name" id="user_name" name="user_name" class="form-control">

                        {{--<select class="form-control" id="phone" name="phone" >--}}
                            {{--<option value="">Phone Number</option>--}}
                            {{--@foreach($sale as $sal)--}}
                                {{--<option value="{{$sal->phone_number}}"> {{$sal->phone_number}}  </option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}

                        <input type="text" style="width: 150px;" placeholder="Address" id="address" name="address" class="form-control">

                        <button id="SearchButton" class="btn" type="submit"><i class="fa fa-search"></i></button>
                        @csrf
                    </form>
                </div>
            </div>

            <table class="table table-hover table-bordered" id="sale_table">
                <thead>
                <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                    <td>ID</td>
                    <td>Name</td>
                    <td>User Name</td>
                    <td>Birthday</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Member Since</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <?php $total = 0; ?>
            @foreach($sale as $customer)
                    <?php $total ++== $total; ?>
                    <tr>
                        <td>{{$total}}</td>
                        <td>{{$customer->name}}</td>
                        <td><a style="color: #1c00cf;" href="{{route('get.saleInfo',['user_name'=>$customer->user_name])}}">{{$customer->user_name}}</a></td>
                        <td>{{$customer->dob}}</td>
                        <td>{{$customer->phone_number}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{date("d-M-Y", strtotime($customer->created_at))}}</td>
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
                                                    <label for="name" class="control-label">Name</label>
                                                    <input value="{{$customer->name}}" type="text" name="name" id="name" class="form-control">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                    @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('user_name')) has-error @endif">
                                                    <label for="user_name" class="control-label">User Name</label>
                                                    <input value="{{$customer->user_name}}" type="text" name="user_name" id="user_name" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('user_name')) <span class="help-block">{{$errors->first('user_name')}}</span> @endif
                                                </div>

                                                <div class="form-group has-feedback @if($errors->has('dob')) has-error @endif">
                                                    <label for="dob" class="control-label">Date Of Birth</label>
                                                    <input  type="text" value="{{$customer->dob}}" name="dob" id="dob" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('dob')) <span class="help-block">{{$errors->first('dob')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('phone')) has-error @endif">
                                                    <label for="phone" class="control-label">Phone</label>
                                                    <input value="{{$customer->phone_number}}" type="text" name="phone" id="phone" class="form-control">
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('phone')) <span class="help-block">{{$errors->first('phone')}}</span> @endif
                                                </div>
                                                <div class="form-group has-feedback @if($errors->has('address')) has-error @endif">
                                                    <label for="address" class="control-label">Address</label>
                                                    <textarea name="address" id="address" class="form-control">{{$customer->address}}</textarea>
                                                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                    @if($errors->has('address')) <span class="help-block">{{$errors->first('address')}}</span> @endif
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