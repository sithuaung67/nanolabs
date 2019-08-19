@extends('admin.layouts.master')

@section('title')
    Invoice
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Invoice
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Invoice</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('get.newInvoice')}}" id="SearchButton" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-plus-circle"></i> New Invoice</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <a href="{{route('print.Invoice')}}" id="print" class="btn">Print <i class="fa fa-forward"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <div class="row">
                        <div class="col-md-3">
                            <table id="TotalQuantity" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalPoint" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGram" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGam" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $sql = DB::select('select * from sale_invoices');
            $length=count($sql);
            $j=0;
            $sum=0;
            $name=0;
            $customer_name="";
            $aa=DB::select("DELETE FROM `scores`");
            for($i=1;$i<=$length;$i++){
                $sql1 = DB::select('select * from sale_invoices where customer_id = ?', [$i] );
                foreach ($sql1 as $result){
                    $sum+=$result->normal;

                    $name=$result->customer_id;
                }
                $cus=DB::select('select * from customers');
                foreach ($cus as $cu){
                    if($cu->id==$name){
                        $customer_name= $cu->id;
                        $sql2=DB::select("INSERT INTO `scores`(`score`,`name`) VALUES ($sum,$customer_name)");
                        $name=0;
                        $sum =0;
                        $customer_name="";
                    }
                }
            }
            ?>
            <?php
            $sql = DB::select('select * from sale_invoices');
            $length=count($sql);
            $j=0;
            $sum=0;
            $name=0;
            $sale_name="";
            $aa=DB::select("DELETE FROM `reports`");
            for($i=1;$i<=$length;$i++){
                $sql1 = DB::select('select * from sale_invoices where sale_user_name = ?', [$i] );
                foreach ($sql1 as $result){
                    $sum+=$result->normal;
                    $name=$result->sale_user_name;
                }
                $cus=DB::select('select * from sales');
                foreach ($cus as $cu){
                    if($cu->id==$name){
                        $sale_name= $cu->id;
                        $sql2=DB::select("INSERT INTO `reports`(`point`,`sale_name`) VALUES ($sum,$sale_name)");
                        $name=0;
                        $sum =0;
                        $sale_name="";
                    }
                }
            }
            ?>

            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <form method="post" action="{{route('invoice.update')}}" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        <div class="col-md-12">
                            <div class="form-group has-feedback @if($errors->has('voucher_number')) has-error @endif">
                                <label for="voucher_number" class="control-label">Voucher Number</label>
                                <input type="text" value="{{$customer->voucher_number}}" name="voucher_number" id="voucher_number" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('voucher_number')) <span class="help-block">{{$errors->first('voucher_number')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback @if($errors->has('sale_user_name')) has-error @endif">
                                <label for="sale_user_name" class="control-label">sale_user_name</label>
                                <select name="sale_user_name" id="sale_user_name" class="form-control">
                                    <option value="{{$customer->sale_user_name}}">{{$customer->sale_user_name}}</option>
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
                                    <option value="{{$customer->customer_id}}">{{$customer->customer_id}}</option>
                                    @foreach($customers as $cus)
                                        <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                                    @endforeach
                                </select>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if($errors->has('customer_id')) <span class="help-block">{{$errors->first('customer_id')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback @if($errors->has('order_date')) has-error @endif">
                                <label for="order_date" class="control-label">Date</label>
                                <input type="date" value="{{$customer->order_date}}" name="order_date" id="order_date" class="form-control">
                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                @if($errors->has('order_date')) <span class="help-block">{{$errors->first('order_date')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback @if($errors->has('point_eight')) has-error @endif">
                                <label for="point_eight" class="control-label">point_eight</label>
                                <input type="text" name="point_eight" value="{{$customer->point_eight}}" id="point_eight" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('point_eight')) <span class="help-block">{{$errors->first('point_eight')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback @if($errors->has('qty')) has-error @endif">
                                <label for="qty" class="control-label">Quantity</label>
                                <input type="text" name="qty" id="qty" value="{{$customer->normal}}" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('qty')) <span class="help-block">{{$errors->first('qty')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="form-group" class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                                <label for="gram" class="control-label">gram</label>
                                <input type="text" name="gram" id="gram" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                                <label for="kyat" class="control-label">kyat</label>
                                <input type="text" name="kyat" id="kyat" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                                <label for="pal" class="control-label">pal</label>
                                <input type="text" name="pal" id="pal" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group has-feedback @if($errors->has('yae')) has-error @endif">
                                <label for="yae" class="control-label">yae</label>
                                <input type="text" name="yae" id="yae" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('yae')) <span class="help-block">{{$errors->first('yae')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-feedback @if($errors->has('cupon_code')) has-error @endif">
                                <label for="cupon_code" class="control-label">cupon_code</label>
                                <input type="text" name="cupon_code" id="cupon_code" value="{{$customer->cupon_code}}" class="form-control">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if($errors->has('cupon_code')) <span class="help-block">{{$errors->first('cupon_code')}}</span> @endif
                            </div>
                        </div>

                <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </div>
                        @csrf
                    </form>
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