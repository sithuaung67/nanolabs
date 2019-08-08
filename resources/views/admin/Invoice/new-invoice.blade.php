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
                <a href="{{route('invoices')}}" class="btn" id="back_invoices_price" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>

            </div>
            <div class="col-md-6 col-md-offset-3">
                <form enctype="multipart/form-data" method="post" action="{{route('post.invoice.new')}}">
                    <div class="col-md-12">
                        <div class="form-group has-feedback @if($errors->has('voucher_number')) has-error @endif">
                            <label for="voucher_number" class="control-label">voucher_number</label>
                            <input type="text" name="voucher_number" id="voucher_number" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('voucher_number')) <span class="help-block">{{$errors->first('voucher_number')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback @if($errors->has('sale_user_name')) has-error @endif">
                            <label for="sale_user_name" class="control-label">sale_user_name</label>
                            <select name="sale_user_name" id="sale_user_name" class="form-control">
                                <option value="">Select Sale Name</option>
                                @foreach($sale as $cus)
                                    <option value="{{$cus->id}}">{{$cus->sale_name}}</option>
                                @endforeach
                            </select>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if($errors->has('sale_user_name')) <span class="help-block">{{$errors->first('sale_user_name')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback @if($errors->has('customer_id')) has-error @endif">
                            <label for="customer_id" class="control-label">Customer Name</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                <option value="">Select Customer Name</option>
                                @foreach($customer as $cus)
                                    <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                                @endforeach
                            </select>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if($errors->has('customer_id')) <span class="help-block">{{$errors->first('customer_id')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('order_date')) has-error @endif">
                            <label for="order_date" class="control-label"> Date </label>
                            <input type="date" name="order_date" id="order_date" class="form-control">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            @if($errors->has('order_date')) <span class="help-block">{{$errors->first('order_date')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('qty')) has-error @endif">
                            <label for="qty" class="control-label">Quantity</label>
                            <input type="text" name="qty" id="qty" class="form-control pa0">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('qty')) <span class="help-block">{{$errors->first('qty')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('point_eight')) has-error @endif">
                            <label for="point_eight" class="control-label">point_eight</label>
                            <input type="text" name="point_eight" id="point_eight" class="form-control pa0">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('point_eight')) <span class="help-block">{{$errors->first('point_eight')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_point')) has-error @endif">
                            <label for="total_point" class="control-label">Total Point</label>
                            <input type="text" name="total_point" id="total_point" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_point')) <span class="help-block">{{$errors->first('total_point')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                            <label for="kyat" class="control-label">kyat</label>
                            <input type="text" name="kyat" id="kyat" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                            <label for="pal" class="control-label">pal</label>
                            <input type="text" name="pal" id="pal" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('yae')) has-error @endif">
                            <label for="yae" class="control-label">yae</label>
                            <input type="text" name="yae" id="yae" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('yae')) <span class="help-block">{{$errors->first('yae')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                            <label for="gram" class="control-label">gram</label>
                            <input type="text" name="gram" id="gram" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('cupon_code')) has-error @endif">
                            <label for="cupon_code" class="control-label">cupon_code</label>
                            <input type="text" name="cupon_code" id="cupon_code" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('cupon_code')) <span class="help-block">{{$errors->first('cupon_code')}}</span> @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="selectType" class="control-label">Select Type</label>
                        <select name="select_type" id="select_type" class="form-control ">
                            <option value="">Select Type</option>
                            <option value="ring" id="ring">ring</option>
                            <option value="ring0" id="ring0">bangles</option>
                            <option value="ring1" id="ring1">necklace</option>
                            <option value="ring2" id="ring2">earring</option>
                        </select>
                    </div>
                    <div class="ring" hidden>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <a style="background: #1e282c;color: white;" class="btn" id="hide9">ring</a>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('ring')) has-error @endif">
                                <label for="ring" class="control-label">ring</label>
                                <input type="text" name="ring" id="ring" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('ring')) <span class="help-block">{{$errors->first('ring')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('ring_number')) has-error @endif">
                                <label for="ring_number" class="control-label">ring_number</label>
                                <input type="text" name="ring_number" id="ring_number" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('ring_number')) <span class="help-block">{{$errors->first('ring_number')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('ring_point_eight')) has-error @endif">
                                <label for="ring_point_eight" class="control-label">ring_point_eight</label>
                                <input type="text" name="ring_point_eight" id="ring_point_eight" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('ring_point_eight')) <span class="help-block">{{$errors->first('ring_point_eight')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('ring_kyat')) has-error @endif">
                                <label for="ring_kyat" class="control-label">ring_kyat</label>
                                <input type="text" name="ring_kyat" id="ring_kyat" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('ring_kyat')) <span class="help-block">{{$errors->first('ring_kyat')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('ring_pal')) has-error @endif">
                                <label for="ring_pal" class="control-label">ring_pal</label>
                                <input type="text" name="ring_pal" id="ring_pal" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('ring_pal')) <span class="help-block">{{$errors->first('ring_pal')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('ring_yae')) has-error @endif">
                                <label for="ring_yae" class="control-label">ring_yae</label>
                                <input type="text" name="ring_yae" id="ring_yae" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('ring_yae')) <span class="help-block">{{$errors->first('ring_yae')}}</span> @endif
                            </div>
                        </div>
                    </div>

                    <div class="ring0" hidden>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <a style="background: #1e282c;color: white;" class="btn" id="hide0">bangles</a>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('bangles')) has-error @endif">
                                <label for="bangles" class="control-label">bangles</label>
                                <input type="text" name="bangles" id="bangles" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('bangles')) <span class="help-block">{{$errors->first('bangles')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('bangles_number')) has-error @endif">
                                <label for="bangles_number" class="control-label">bangles_number</label>
                                <input type="text" name="bangles_number" id="bangles_number" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('bangles_number')) <span class="help-block">{{$errors->first('bangles_number')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('bangles_point_eight')) has-error @endif">
                                <label for="bangles_point_eight" class="control-label">bangles_point_eight</label>
                                <input type="text" name="bangles_point_eight" id="bangles_point_eight" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('bangles_point_eight')) <span class="help-block">{{$errors->first('bangles_point_eight')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('bangles_kyat')) has-error @endif">
                                <label for="bangles_kyat" class="control-label">bangles_kyat</label>
                                <input type="text" name="bangles_kyat" id="bangles_kyat" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('bangles_kyat')) <span class="help-block">{{$errors->first('bangles_kyat')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('bangles_pal')) has-error @endif">
                                <label for="bangles_pal" class="control-label">bangles_pal</label>
                                <input type="text" name="bangles_pal" id="bangles_pal" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('bangles_pal')) <span class="help-block">{{$errors->first('bangles_pal')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('bangles_yae')) has-error @endif">
                                <label for="bangles_yae" class="control-label">bangles_yae</label>
                                <input type="text" name="bangles_yae" id="bangles_yae" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('bangles_yae')) <span class="help-block">{{$errors->first('bangles_yae')}}</span> @endif
                            </div>
                        </div>
                    </div>

                    <div class="ring1" hidden>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <a style="background: #1e282c;color: white;" class="btn" id="hide1">necklace</a>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('necklace')) has-error @endif">
                                <label for="necklace" class="control-label">necklace</label>
                                <input type="text" name="necklace" id="necklace" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('necklace')) <span class="help-block">{{$errors->first('necklace')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('necklace_number')) has-error @endif">
                                <label for="necklace_number" class="control-label">necklace_number</label>
                                <input type="text" name="necklace_number" id="necklace_number" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('necklace_number')) <span class="help-block">{{$errors->first('necklace_number')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('necklace_point_eight')) has-error @endif">
                                <label for="necklace_point_eight" class="control-label">necklace_point_eight</label>
                                <input type="text" name="necklace_point_eight" id="necklace_point_eight" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('necklace_point_eight')) <span class="help-block">{{$errors->first('necklace_point_eight')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('necklace_kyat')) has-error @endif">
                                <label for="necklace_kyat" class="control-label">necklace_kyat</label>
                                <input type="text" name="necklace_kyat" id="necklace_kyat" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('necklace_kyat')) <span class="help-block">{{$errors->first('necklace_kyat')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('necklace_pal')) has-error @endif">
                                <label for="necklace_pal" class="control-label">necklace_pal</label>
                                <input type="text" name="necklace_pal" id="necklace_pal" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('necklace_pal')) <span class="help-block">{{$errors->first('necklace_pal')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('necklace_yae')) has-error @endif">
                                <label for="necklace_yae" class="control-label">necklace_yae</label>
                                <input type="text" name="necklace_yae" id="necklace_yae" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('necklace_yae')) <span class="help-block">{{$errors->first('necklace_yae')}}</span> @endif
                            </div>
                        </div>
                    </div>
                    <div class="ring2" hidden>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <a style="background: #1e282c;color: white;" class="btn" id="hide2">earring</a>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('earring')) has-error @endif">
                                <label for="earring" class="control-label">Earring</label>
                                <input type="text" name="earring" id="necklace" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('earring')) <span class="help-block">{{$errors->first('earring')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('earring_number')) has-error @endif">
                                <label for="earring_number" class="control-label">earring_number</label>
                                <input type="text" name="earring_number" id="earring_number" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('earring_number')) <span class="help-block">{{$errors->first('earring_number')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('earring_point_eight')) has-error @endif">
                                <label for="earring_point_eight" class="control-label">earring_point_eight</label>
                                <input type="text" name="earring_point_eight" id="earring_point_eight" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('earring_point_eight')) <span class="help-block">{{$errors->first('earring_point_eight')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('earring_kyat')) has-error @endif">
                                <label for="earring_kyat" class="control-label">earring_kyat</label>
                                <input type="text" name="earring_kyat" id="earring_kyat" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('earring_kyat')) <span class="help-block">{{$errors->first('earring_kyat')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('earring_pal')) has-error @endif">
                                <label for="earring_pal" class="control-label">earring_pal</label>
                                <input type="text" name="earring_pal" id="earring_pal" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if($errors->has('earring_pal')) <span class="help-block">{{$errors->first('earring_pal')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 15px;">
                            <div class="form-group has-feedback @if($errors->has('earring_yae')) has-error @endif">
                                <label for="earring_yae" class="control-label">earring_yae</label>
                                <input type="text" name="earring_yae" id="earring_yae" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('earring_yae')) <span class="help-block">{{$errors->first('earring_yae')}}</span> @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <div class="form-group">
                            <button type="submit" style="background: #1e282c;color: white;" class="btn btn-block">Create</button>
                        </div>
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