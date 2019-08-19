@extends('admin.layouts.master')

@section('title')
    Customer
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-users"></span> Customers
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> Admin Panel</a></li>
                <li class="active">Customers</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('customer.new')}}" id="SearchButton" class="btn" style="background: #1e282c;color: #ffffff;"><i class="fa fa-plus-circle"></i> New Customer</a>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <form class="form-inline" action="{{route('search.customer')}}" method="get">
                        <input type="date" id="birthday" name="birthday" class="form-control">
                        <select  class="form-control" id="user_name" name="user_name" >
                            <option value="">Account Name</option>
                            @foreach($customers as $sal)
                                <option value="{{$sal->user_name}}"> {{$sal->user_name}}  </option>
                            @endforeach
                        </select>
                        {{--<select class="form-control" id="customer_name" name="customer_name" >--}}
                            {{--<option value="">Customer Name</option>--}}
                            {{--@foreach($customers as $sal)--}}
                                {{--<option value="{{$sal->name}}"> {{$sal->name}}  </option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                        <select class="form-control" id="phone" name="phone" >
                            <option value="">Phone Number</option>
                            @foreach($customers as $sal)
                                <option value="{{$sal->phone_number}}"> {{$sal->phone_number}}  </option>
                            @endforeach
                        </select>
                        <input type="text" style="width: 150px;" placeholder="Town" id="town" name="town" class="form-control">
                        <input type="text" style="width: 150px;" placeholder=" Shop" id="shop" name="shop" class="form-control">
                        <select class="form-control" id="phone" name="phone" >
                            <option value="">NRC</option>
                            @foreach($customers as $sal)
                                <option value="{{$sal->nrc}}"> {{$sal->nrc}}  </option>
                            @endforeach
                        </select>
                        <button id="SearchButton" class="btn" type="submit"><i class="fa fa-search"></i></button>
                        @csrf
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-hover table-bordered" id="customer_table">
                        <thead>
                        <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                            <td>ID</td>
                            <td>Account Name</td>
                            <td>Customer Name</td>
                            <td>Birthday</td>
                            <td>Phone</td>
                            <td>Shop</td>
                            <td>Address</td>
                            <td>Town</td>
                            <td>QRCode</td>

                            <td>Member Since</td>
                            <td>Actions</td>
                        </tr>
                        </thead>

                        <?php $total = 0; ?>
                                @foreach($customers as $customer)
                                        <?php $total ++== $total; ?>
                            <tr>
                                <td>{{$total}}</td>
                                <td>{{$customer->user_name}}</td>
                                <td><a style="color: #1c00cf;" href="{{route('get.customerInfo',['id'=>$customer->id])}}">{{$customer->name}}</a></td>
                                <td>{{date("d-M-Y", strtotime($customer->dob))}}</td>
                                <td>{{$customer->phone_number}}</td>
                                <td>{{$customer->shop_name}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->town}}</td>
                                <td><a style="color: #1c00cf;" href="{{route('get.viewCustomerQrcode',['id'=>$customer->id])}}">{!! QrCode::size(60)->generate($customer->id); !!}</a></td>
                                {{--</td>--}}
                                <td>{{date("d-M-Y", strtotime($customer->created_at))}}</td>
                                {{--<td>{{bcrypt($customer->password)}}</td>--}}
                                <td class="btn btn-default ">
                                    <a href="#" data-toggle="modal" data-target="#e{{$customer->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="e{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <form method="post" action="{{route('customer.update')}}">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Edit customer account info for <b>""</b></h4>
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
                                                            <input value="{{$customer->name}}" type="text" name="full_name" id="full_name" class="form-control">
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('full_name')) <span class="help-block">{{$errors->first('full_name')}}</span> @endif
                                                        </div>
                                                        <div class="form-group has-feedback @if($errors->has('birthday')) has-error @endif">
                                                            <label for="birthday" class="control-label">Date Of Birth</label>
                                                            <input value="{{$customer->dob}}" type="date" name="birthday" id="birthday" class="form-control">
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('birthday')) <span class="help-block">{{$errors->first('birthday')}}</span> @endif
                                                        </div>
                                                        <div class="form-group has-feedback @if($errors->has('phone')) has-error @endif">
                                                            <label for="phone" class="control-label">Phone</label>
                                                            <input value="{{$customer->phone_number}}" type="text" name="phone" id="phone" class="form-control">
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('phone')) <span class="help-block">{{$errors->first('phone')}}</span> @endif
                                                        </div>
                                                        <div class="form-group has-feedback @if($errors->has('shop')) has-error @endif">
                                                            <label for="shop" class="control-label">Shop</label>
                                                            <input value="{{$customer->shop_name}}" type="text" name="shop" id="shop" class="form-control">
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('shop')) <span class="help-block">{{$errors->first('shop')}}</span> @endif
                                                        </div>
                                                        <div class="form-group has-feedback @if($errors->has('address')) has-error @endif">
                                                            <label for="address" class="control-label">Address</label>
                                                            <textarea name="address" id="address" class="form-control">{{$customer->address}}</textarea>
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('address')) <span class="help-block">{{$errors->first('address')}}</span> @endif
                                                        </div>

                                                        <div class="form-group has-feedback @if($errors->has('town')) has-error @endif">
                                                            <label for="town" class="control-label">Town</label>
                                                            <input value="{{$customer->town}}" type="text" name="town" id="town" class="form-control">
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('town')) <span class="help-block">{{$errors->first('town')}}</span> @endif
                                                        </div>
                                                        <div class="form-group has-feedback @if($errors->has('nrc')) has-error @endif">
                                                            <label for="nrc" class="control-label">nrc</label>
                                                            <input value="{{$customer->nrc}}" type="text" name="nrc" id="nrc" class="form-control">
                                                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                                            @if($errors->has('nrc')) <span class="help-block">{{$errors->first('nrc')}}</span> @endif
                                                        </div>

                                                        <div class="form-group has-feedback @if($errors->has('password')) has-error @endif">
                                                            <label for="password" class="control-label">Password</label>
                                                            <input  type="password" value="{{$customer->password}}" name="password" id="password" class="form-control">
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
                                            <form method="post" action="{{route('customer.delete')}}">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> confirm delete customer account</h4>
                                                    </div>
                                                    <div class="modal-body text-danger">
                                                        <input type="hidden" name="id" value="{{$customer->id}}">
                                                        Are you sure want to delete this customer account name of <b>"{{$customer->name}}"</b>
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