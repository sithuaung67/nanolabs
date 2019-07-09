@extends('admin.layouts.master')

@section('title')
    Invoice
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-user-plus"></span> New Invoice
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Admin Panel</a></li>
                <li class="active">New Invoice</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('invoices')}}" class="btn" style="color: white;background: #1e282c;"><i class="fa fa-backward"></i> Back</a>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <form enctype="multipart/form-data" method="post" action="{{route('post.invoice.new')}}">
                    {{--<div class="col-md-12">--}}
                        {{----}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}

                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}

                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}

                    {{--</div>--}}

                    <div class="form-group has-feedback @if($errors->has('customer_name')) has-error @endif">
                        <label for="customer_name" class="control-label">Customer Name</label>
                        <select name="customer_name" id="customer_name" class="form-control">
                            <option value="">Select Customer Name</option>
                            @foreach($customer as $cus)
                                <option value="{{$cus->customer_name}}">{{$cus->customer_name}}</option>
                            @endforeach
                        </select>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if($errors->has('customer_name')) <span class="help-block">{{$errors->first('customer_name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('sale_name')) has-error @endif">
                        <label for="sale_name" class="control-label">Sale Name</label>
                        <select name="sale_name" id="sale_name" class="form-control">
                            <option value="">Select Sale Name</option>
                            @foreach($sale as $cus)
                                <option value="{{$cus->sale_name}}">{{$cus->sale_name}}</option>
                            @endforeach
                        </select>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if($errors->has('sale_name')) <span class="help-block">{{$errors->first('sale_name')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('shop')) has-error @endif">
                        <label for="shop" class="control-label"> Shop </label>
                        <input type="text" name="shop" id="shop" class="form-control">
                        <span class="glyphicon glyphicon-shopping-cart form-control-feedback"></span>
                        @if($errors->has('shop')) <span class="help-block">{{$errors->first('shop')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('date')) has-error @endif">
                        <label for="date" class="control-label"> Date </label>
                        <input type="date" name="date" id="date" class="form-control">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        @if($errors->has('date')) <span class="help-block">{{$errors->first('date')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('invoice_number')) has-error @endif">
                        <label for="invoice_number" class="control-label">Invoice Number</label>
                        <input type="text" name="invoice_number" id="invoice_number" class="form-control">
                        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                        @if($errors->has('invoice_number')) <span class="help-block">{{$errors->first('invoice_number')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('quantity')) has-error @endif">
                        <label for="quantity" class="control-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control">
                        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                        @if($errors->has('quantity')) <span class="help-block">{{$errors->first('quantity')}}</span> @endif
                    </div>

                    <div class="form-group has-feedback @if($errors->has('select_point')) has-error @endif">
                        <label for="select_point" class="control-label">Select Point</label>
                        <select name="select_point" id="select_point" class="form-control">
                            <option value="0">Select Point</option>
                            <option value="1">Normal</option>
                            <option value="0.8">0.8</option>
                        </select>
                        @if($errors->has('select_point')) <span class="help-block">{{$errors->first('select_point')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('point')) has-error @endif">
                        <label for="point" class="control-label">Point</label>
                        <input type="number" name="point" id="point" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('point')) <span class="help-block">{{$errors->first('point')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                        <label for="kyat" class="control-label">Kyat</label>
                        <input type="text" name="kyat" id="kyat" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                        <label for="pal" class="control-label">Pal</label>
                        <input type="number" name="pal" id="pal" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('ywaw')) has-error @endif">
                        <label for="ywaw" class="control-label">Ywaw</label>
                        <input type="number" name="ywaw" id="ywaw" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('ywaw')) <span class="help-block">{{$errors->first('ywaw')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                        <label for="gram" class="control-label">Gram</label>
                        <input type="text" name="gram" id="gram" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                    </div>
                    <div class="form-group has-feedback @if($errors->has('coupon')) has-error @endif">
                        <label for="coupon" class="control-label">Coupon</label>
                        <input type="text" name="coupon" id="coupon" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if($errors->has('coupon')) <span class="help-block">{{$errors->first('coupon')}}</span> @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" style="background: #1e282c;color: white;" class="btn btn-lg">Create</button>
                    </div>
                @csrf
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