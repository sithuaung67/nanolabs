@extends('admin.layouts.master')

@section('title')
    Order
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Order
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Order</li>
            </ol>
        </section>
    {{--<?php--}}
    {{--$sql = DB::select('select * from order_invoices');--}}
    {{--$length=count($sql);--}}
    {{--$j=0;--}}
    {{--$sum=0;--}}
    {{--$name=0;--}}
    {{--$customer_name="";--}}
    {{--$aa=DB::select("DELETE FROM `scores`");--}}
    {{--for($i=1;$i<=$length;$i++){--}}
        {{--$sql1 = DB::select('select * from order_invoices where customer_id = ?', [$i] );--}}
        {{--foreach ($sql1 as $result){--}}
            {{--$sum+=$result->qty;--}}

            {{--$name=$result->customer_id;--}}
        {{--}--}}
        {{--$cus=DB::select('select * from customers');--}}
        {{--foreach ($cus as $cu){--}}
            {{--if($cu->id==$name){--}}
                {{--$customer_name= $cu->id;--}}
                {{--$sql2=DB::select("INSERT INTO `scores`(`score`,`name`) VALUES ($sum,$customer_name)");--}}
                {{--$name=0;--}}
                {{--$sum =0;--}}
                {{--$customer_name="";--}}
            {{--}--}}
        {{--}--}}
    {{--}--}}
    {{--?>--}}
    {{--<?php--}}
    {{--$sql = DB::select('select * from order_invoices');--}}
    {{--$length=count($sql);--}}
    {{--$j=0;--}}
    {{--$sum=0;--}}
    {{--$name=0;--}}
    {{--$sale_name="";--}}
    {{--$aa=DB::select("DELETE FROM `reports`");--}}
    {{--for($i=1;$i<=$length;$i++){--}}
        {{--$sql1 = DB::select('select * from order_invoices where sale_user_name = ?', [$i] );--}}
        {{--foreach ($sql1 as $result){--}}
            {{--$sum+=$result->qty;--}}
            {{--$name=$result->sale_user_name;--}}
        {{--}--}}
        {{--$cus=DB::select('select * from sales');--}}
        {{--foreach ($cus as $cu){--}}
            {{--if($cu->id==$name){--}}
                {{--$sale_name= $cu->id;--}}
                {{--$sql2=DB::select("INSERT INTO `reports`(`point`,`sale_name`) VALUES ($sum,$sale_name)");--}}
                {{--$name=0;--}}
                {{--$sum =0;--}}
                {{--$sale_name="";--}}
            {{--}--}}
        {{--}--}}
    {{--}--}}
    {{--?>--}}

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('get.newOrder')}}" id="SearchButton" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-plus-circle"></i> New Invoice</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <a href="{{route('print.Order')}}" id="print" class="btn">Print <i class="fa fa-forward"></i></a>

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
                            <table id="TotalPointEight" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGram" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        {{--<div class="col-md-3">--}}
                            {{--<table id="TotalGam" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <form class="form-inline" action="{{route("search.order")}}" method="get">
                        <input type="date"  id="order_date" name="order_date" class="form-control">
                        <select class="form-control" id="voucher_number" name="voucher_number" >
                            <option value="">voucher_number</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->voucher_number}}"> {{$cats->voucher_number}}  </option>
                            @endforeach
                        </select>
                        <select class="form-control" id="sale_user_name" name="sale_user_name" >
                            <option value="">sale_user_name</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->sale_user_name}}">{{$cats->sale_user_name}}</option>
                            @endforeach
                        </select>
                        <select class="form-control" id="customer_id" name="customer_id" >
                            <option value="">customer_id</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->customer_id}}"> {{$cats->customer_id}}  </option>
                            @endforeach
                        </select>
                        <button id="SearchButton" class="btn" type="submit"><i class="fa fa-search"></i></button>
                        @csrf
                    </form>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if(Session('info'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                        </div>
                    </div>
                @endif
              <div class="col-md-12">
                    <div class="panel">
                          <div class="panel-heading" style="background: #1e282c;color: #ffffff">
                              Order / List
                          </div>
                          <div class="panel-body table-responsive">
                              <table class="table table-hover table-bordered" id="dataTableInvoice">
                                  <thead>
                                  <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                                      <td>ID</td>
                                      <td>Sale Date</td>
                                      <td>Customer Name</td>
                                      <td>Sale Name</td>
                                      <td>Town</td>
                                      <td>Voucher Number</td>
                                      <td>Normal</td>
                                      <td>Point Eight</td>
                                      <td>Gram</td>
                                      <td style="font-size: 17px;">ကျပ်</td>
                                      <td style="font-size: 17px;">ပဲ</td>
                                      <td style="font-size: 17px;">ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">ယခင်ကျန် ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">ယခင်ကျန် ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">ယခင်ကျန် ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">စုစုပေါင်းရွှေချိန် ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">စုစုပေါင်းရွှေချိန် ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">စုစုပေါင်းရွှေချိန် ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">ယခုပေးချေမည့်ရွှေချိန် ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">ယခုပေးချေမည့်ရွှေချိန် ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">ယခုပေးချေမည့်ရွှေချိန် ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">လက်ကျန်အကြွေး ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">လက်ကျန်အကြွေး ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">လက်ကျန်အကြွေး ရွေး</td>
                                      <td style="font-size: 17px;">အလျော့ကျပ်</td>
                                      <td style="font-size: 17px;">အလျော့ပဲ</td>
                                      <td style="font-size: 17px;">အလျော့ရွေး</td>
                                      <td>Name</td>
                                      <td>Date</td>
                                      <td>Note</td>
                                      <td>Cupon Code</td>
                                      <td>Actions</td>
                                  </tr>
                                  </thead>
                                  <?php $total =0; ?>

                                  @foreach($invoice as $customer)
                                      <?php $total ++== $total; ?>
                                      <tr>
                                          <td>{{$customer->sale_invoice_id}}</td>
                                          <td>{{$customer->sale_date}}</td>

                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.customerInfo',['id'=>$customer->customer_id])}}">
                                                  @foreach($customers as $cust)
                                                      @if($cust->id==$customer->customer_id)
                                                          {{$cust->name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.saleInfo',['user_name'=>$customer->sale_user_name])}}">
                                                  {{--@foreach($sale as $sal)--}}
                                                  {{--@if($sal->user_name==$customer->sale_user_name)--}}
                                                  {{$customer->sale_user_name}}
                                                  {{--@endif--}}
                                                  {{--@endforeach--}}
                                              </a>
                                          </td>
                                          <td>
                                              {{--<a style="color: #1c00cf;" href="{{route('get.saleInfo',['name'=>$customer->sale_user_name])}}">--}}
                                              @foreach($customers as $sal)
                                                  @if($sal->id==$customer->customer_id)
                                                      {{$sal->town}}
                                                  @endif
                                              @endforeach
                                              {{--</a>--}}
                                          </td>
                                          <td>{{$customer->voucher_number}}</td>
                                          <td class="quantity">{{$customer->qty}}</td>
                                          <td class="point_eight">{{$customer->point_eight}}</td>
                                          <td class="gram" >{{$customer->gram}}</td>
                                          <td>{{$customer->kyat}}</td>
                                          <td>{{$customer->pal}}</td>
                                          <td>{{$customer->yae}}</td>
                                          <td>{{$customer->previous_remain_kyat}}</td>
                                          <td>{{$customer->previous_remain_pal}}</td>
                                          <td>{{$customer->previous_remain_yae}}</td>
                                          <td>{{$customer->buy_debit_kyat}}</td>
                                          <td>{{$customer->buy_debit_pal}}</td>
                                          <td>{{$customer->buy_debit_yae}}</td>
                                          <td>{{$customer->payment_kyat}}</td>
                                          <td>{{$customer->payment_pal}}</td>
                                          <td>{{$customer->payment_yae}}</td>
                                          <td>{{$customer->now_remain_kyat}}</td>
                                          <td>{{$customer->now_remain_pal}}</td>
                                          <td>{{$customer->now_remain_yae}}</td>
                                          <td class="kyat">{{$customer->total_ayot_kyat}}</td>
                                          <td class="pal">{{$customer->total_ayot_pal}}</td>
                                          <td class="yae">{{$customer->total_ayot_yae}}</td>
                                          <td>
                                              {{$customer->sale_user_name}}

                                          </td>
                                          <td>
                                              @foreach($customers as $sal)
                                                  @if($sal->id==$customer->customer_id)
                                                      {{$sal->s_date}}
                                                  @endif
                                              @endforeach
                                          </td>
                                          <td>{{$customer->note}}</td>
                                          <td>{{$customer->cupon_code}}</td>
                                          {{--<td>{{$customer->sale_date}}</td>--}}
                                          <td class="btn btn-default ">

                                              {{--<a href="{{route('get.edit',['id'=>$customer->id])}}" class="btn btn-outline-light btn-sm"><i class="fas fa-edit"></i></a>--}}
                                              <a href="#" data-toggle="modal" data-target="#e{{$customer->sale_invoice_id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>

                                              <!-- Edit Modal -->
                                              <div class="modal fade" id="e{{$customer->sale_invoice_id}}"  role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <form method="post" action="{{route('order.update')}}">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                  <h4 class="modal-title" id="myModalLabel">Edit Order Information</h4>
                                                              </div>
                                                              <div class="modal-body text-left">
                                                                  <input type="hidden" name="id" value="{{$customer->sale_invoice_id}}">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('voucher_number')) has-error @endif">
                                                                          <label for="voucher_number" class="control-label">voucher_number</label>
                                                                          <input type="text" value="{{$customer->voucher_number}}" name="voucher_number" id="voucher_number" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('voucher_number')) <span class="help-block">{{$errors->first('voucher_number')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('sale_user_name')) has-error @endif">
                                                                          <label for="sale_user_name" class="control-label">sale_user_name</label>
                                                                          {{--<input type="text" name="sale_user_name" id="sale_user_name" value="{{$customer->sale_user_name}}" class="form-control">--}}
                                                                          <select name="sale_user_name"  id="sale_user_name" class="form-control">
                                                                              <option value="{{$customer->sale_user_name}}">{{$customer->sale_user_name}}</option>
                                                                              @foreach($sale as $cus)
                                                                                  <option value="{{$cus->user_name}}">{{$cus->user_name}}</option>
                                                                              @endforeach
                                                                          </select>
                                                                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                          @if($errors->has('sale_user_name')) <span class="help-block">{{$errors->first('sale_user_name')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('order_date')) has-error @endif">
                                                                          <label for="order_date" class="control-label"> Date </label>
                                                                          <input type="text" name="order_date" value="{{$customer->sale_date}}" id="order_date" class="form-control">
                                                                          <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                                                          @if($errors->has('order_date')) <span class="help-block">{{$errors->first('order_date')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  {{--<script>--}}
                                                                  {{--$('#order_date').datepicker({--}}

                                                                  {{--format: 'dd/mm/yyyy'--}}
                                                                  {{--});--}}
                                                                  {{--</script>--}}
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('normal')) has-error @endif">
                                                                          <label for="normal" class="control-label">Normal</label>
                                                                          <input value="{{$customer->qty}}" type="text" name="normal" id="normal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('normal')) <span class="help-block">{{$errors->first('normal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('point_eight')) has-error @endif">
                                                                          <label for="point_eight" class="control-label">Point Eight</label>
                                                                          <input value="{{$customer->point_eight}}" type="text" name="point_eight" id="point_eight" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('point_eight')) <span class="help-block">{{$errors->first('point_eight')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('return_quantity')) has-error @endif">
                                                                          <label for="return_quantity" class="control-label">Return Normal</label>
                                                                          <input value="{{$customer->return_quantity}}" type="text" name="return_quantity" id="return_quantity" class="form-control return_quantity">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_quantity')) <span class="help-block">{{$errors->first('return_quantity')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('return_pointeight')) has-error @endif">
                                                                          <label for="return_pointeight" class="control-label">Return PointEight</label>
                                                                          <input value="{{$customer->return_pointeight}}" type="text" name="return_pointeight" id="return_pointeight" class="form-control return_pointeight">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_pointeight')) <span class="help-block">{{$errors->first('return_pointeight')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('now_remain_quantity')) has-error @endif">
                                                                          <label for="now_remain_quantity" class="control-label">Now Remain Normal</label>
                                                                          <input value="{{$customer->now_remain_quantity}}" type="text" name="now_remain_quantity" id="now_remain_quantity" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_remain_quantity')) <span class="help-block">{{$errors->first('now_remain_quantity')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('now_remain_pointeight')) has-error @endif">
                                                                          <label for="now_remain_pointeight" class="control-label">Now Remain PointEight</label>
                                                                          <input value="{{$customer->now_remain_pointeight}}" type="text" name="now_remain_pointeight" id="now_remain_pointeight" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_remain_pointeight')) <span class="help-block">{{$errors->first('now_remain_pointeight')}}</span> @endif
                                                                      </div>
                                                                  </div>

                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                                                                          <label for="gram" class="control-label">gram</label>
                                                                          <input value="{{$customer->gram}}" type="text" name="gram" id="gram" class="form-control pc1">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                                                                          <label for="kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->kyat}}" type="text" name="kyat" id="kyat" class="form-control pc2">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                                                                          <label for="pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->pal}}" type="text" name="pal" id="pal" class="form-control pc3">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('yae')) has-error @endif">
                                                                          <label for="yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->yae}}" type="text" name="yae" id="yae" class="form-control pc4">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('yae')) <span class="help-block">{{$errors->first('yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('return_gram')) has-error @endif">
                                                                          <label for="return_gram" class="control-label">Returm gram</label>
                                                                          <input value="{{$customer->return_gram}}" type="text" name="return_gram" id="return_gram" class="form-control return_gram">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_gram')) <span class="help-block">{{$errors->first('return_gram')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('now_remain_gram')) has-error @endif">
                                                                          <label for="now_remain_gram" class="control-label">now remain gram</label>
                                                                          <input value="{{$customer->now_remain_gram}}" type="text" name="now_remain_gram" id="now_remain_gram" class="form-control now_remain_gram">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_remain_gram')) <span class="help-block">{{$errors->first('now_remain_gram')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('sub_return_kyat')) has-error @endif">
                                                                          <label for="sub_return_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->sub_return_kyat}}" type="text" name="sub_return_kyat" id="sub_return_kyat" class="form-control pc2">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('sub_return_kyat')) <span class="help-block">{{$errors->first('sub_return_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('sub_return_pal')) has-error @endif">
                                                                          <label for="sub_return_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->sub_return_pal}}" type="text" name="sub_return_pal" id="sub_return_pal" class="form-control pc3">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('sub_return_pal')) <span class="help-block">{{$errors->first('sub_return_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('sub_return_yae')) has-error @endif">
                                                                          <label for="sub_return_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->sub_return_yae}}" type="text" name="sub_return_yae" id="sub_return_yae" class="form-control pc4">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('sub_return_yae')) <span class="help-block">{{$errors->first('sub_return_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ယခု ဝယ်ယူသည့်ရွှေချိန် (100%)  </label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('total_kyat')) has-error @endif">
                                                                          <label for="total_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->total_kyat}}" type="text" name="total_kyat" id="total_kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('total_kyat')) <span class="help-block">{{$errors->first('total_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('total_pal')) has-error @endif">
                                                                          <label for="total_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->total_pal}}" type="text" name="total_pal" id="total_pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('total_pal')) <span class="help-block">{{$errors->first('total_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('total_yae')) has-error @endif">
                                                                          <label for="total_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->total_yae}}" type="text" name="total_yae" id="total_yae" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('total_yae')) <span class="help-block">{{$errors->first('total_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('customer_id')) has-error @endif">
                                                                          <label for="customer_id" class="control-label">Customer Name</label>
                                                                          <select name="customer_id"  id="customer_id" class="form-control customer">
                                                                              @foreach($customers as $cus)
                                                                                  <option value="{{$cus->id}}">
                                                                                      @if($customer->customer_id=$cus->id)
                                                                                          {{$cus->name}}
                                                                                      @endif
                                                                                  </option>
                                                                                  <option value="{{$cus->id}}">{{$cus->name}}</option>
                                                                              @endforeach
                                                                          </select>
                                                                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                          @if($errors->has('customer_id')) <span class="help-block">{{$errors->first('customer_id')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ယခင် လက်ကျန်အကြွေး (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('previous_remain_kyat')) has-error @endif">
                                                                          <label for="previous_remain_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->previous_remain_kyat}}" type="text" name="previous_remain_kyat" id="previous_remain_kyat" class="form-control previous_remain_kyat">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('previous_remain_kyat')) <span class="help-block">{{$errors->first('previous_remain_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('previous_remain_pal')) has-error @endif">
                                                                          <label for="previous_remain_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->previous_remain_pal}}" type="text" name="previous_remain_pal" id="previous_remain_pal" class="form-control previous_remain_pal">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('previous_remain_pal')) <span class="help-block">{{$errors->first('previous_remain_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('previous_remain_yae')) has-error @endif">
                                                                          <label for="previous_remain_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->previous_remain_yae}}" type="text" name="previous_remain_yae" id="previous_remain_yae" class="form-control previous_remain_yae">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('previous_remain_yae')) <span class="help-block">{{$errors->first('previous_remain_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">စုစုပေါင်းရွှေချိန် (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('buy_debit_kyat')) has-error @endif">
                                                                          <label for="buy_debit_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->buy_debit_kyat}}" type="text" name="buy_debit_kyat" id="buy_debit_kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('buy_debit_kyat')) <span class="help-block">{{$errors->first('buy_debit_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('buy_debit_pal')) has-error @endif">
                                                                          <label for="buy_debit_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->buy_debit_pal}}"  type="text" name="buy_debit_pal" id="buy_debit_pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('buy_debit_pal')) <span class="help-block">{{$errors->first('buy_debit_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('buy_debit_yae')) has-error @endif">
                                                                          <label for="buy_debit_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->buy_debit_yae}}" type="text" name="buy_debit_yae" id="buy_debit_yae" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('buy_debit_yae')) <span class="help-block">{{$errors->first('buy_debit_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ပြန်ပေးရွှေချိန် + အလျော့ (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('return_gold_kyat')) has-error @endif">
                                                                          <label for="return_gold_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->return_gold_kyat}}"  type="text" name="return_gold_kyat" id="return_gold_kyat" class="form-control return_gold_kyat">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_gold_kyat')) <span class="help-block">{{$errors->first('return_gold_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('return_gold_pal')) has-error @endif">
                                                                          <label for="return_gold_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->return_gold_pal}}" type="text" name="return_gold_pal" id="return_gold_pal" class="form-control return_gold_pal">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_gold_pal')) <span class="help-block">{{$errors->first('return_gold_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('return_gold_yae')) has-error @endif">
                                                                          <label for="return_gold_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->return_gold_yae}}"  type="text" name="return_gold_yae" id="return_gold_yae" class="form-control return_gold_yae">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_gold_yae')) <span class="help-block">{{$errors->first('return_gold_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('net_pay_kyat')) has-error @endif">
                                                                          <label for="net_pay_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->net_pay_kyat}}"  type="text" name="net_pay_kyat" id="net_pay_kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('net_pay_kyat')) <span class="help-block">{{$errors->first('net_pay_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('net_pay_pal')) has-error @endif">
                                                                          <label for="net_pay_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->net_pay_pal}}" type="text" name="net_pay_pal" id="net_pay_pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('net_pay_pal')) <span class="help-block">{{$errors->first('net_pay_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('net_pay_yae')) has-error @endif">
                                                                          <label for="net_pay_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->net_pay_yae}}"  type="text" name="net_pay_yae" id="net_pay_yae" class="form-control ">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('net_pay_yae')) <span class="help-block">{{$errors->first('net_pay_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ယခု ပေးချေမည့်ရွှေချိန် (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('payment_kyat')) has-error @endif">
                                                                          <label for="payment_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->payment_kyat}}" type="text" name="payment_kyat" id="payment_kyat" class="form-control pc23">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('payment_kyat'))<span class="help-block">{{$errors->first('payment_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('payment_pal')) has-error @endif">
                                                                          <label for="payment_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->payment_pal}}" type="text" name="payment_pal" id="payment_pal" class="form-control pc24">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('payment_pal')) <span class="help-block">{{$errors->first('payment_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('payment_yae')) has-error @endif">
                                                                          <label for="payment_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->payment_yae}}" type="text" name="payment_yae" id="payment_yae" class="form-control pc25">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('payment_yae')) <span class="help-block">{{$errors->first('payment_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ယခု လက်ကျန်ရွှေချိန် (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('now_remain_kyat')) has-error @endif">
                                                                          <label for="now_remain_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->now_remain_kyat}}" type="text" name="now_remain_kyat" id="now_remain_kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_remain_kyat')) <span class="help-block">{{$errors->first('now_remain_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('now_remain_pal')) has-error @endif">
                                                                          <label for="now_remain_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->now_remain_pal}}"  type="text" name="now_remain_pal" id="now_remain_pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_remain_pal')) <span class="help-block">{{$errors->first('now_remain_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('now_remain_yae')) has-error @endif">
                                                                          <label for="now_remain_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->now_remain_yae}}" type="text" name="now_remain_yae" id="now_remain_yae" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_remain_yae')) <span class="help-block">{{$errors->first('now_remain_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">စုစုပေါင်းအလျော့ (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('total_ayot_kyat')) has-error @endif">
                                                                          <label for="total_ayot_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->total_ayot_kyat}}" type="text" name="total_ayot_kyat" id="total_ayot_kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('total_ayot_kyat')) <span class="help-block">{{$errors->first('total_ayot_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('total_ayot_pal')) has-error @endif">
                                                                          <label for="total_ayot_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->total_ayot_pal}}"  type="text" name="total_ayot_pal" id="total_ayot_pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('total_ayot_pal')) <span class="help-block">{{$errors->first('total_ayot_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('total_ayot_yae')) has-error @endif">
                                                                          <label for="total_ayot_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->total_ayot_yae}}" type="text" name="total_ayot_yae" id="total_ayot_yae" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('total_ayot_yae')) <span class="help-block">{{$errors->first('total_ayot_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ပြန်ပေး အလျော့ (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('return_ayot_kyat')) has-error @endif">
                                                                          <label for="return_ayot_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->return_ayot_kyat}}" type="text" name="return_ayot_kyat" id="return_ayot_kyat" class="form-control return_ayot_kyat">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_ayot_kyat')) <span class="help-block">{{$errors->first('return_ayot_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('return_ayot_pal')) has-error @endif">
                                                                          <label for="return_ayot_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->return_ayot_pal}}" type="text" name="return_ayot_pal" id="return_ayot_pal" class="form-control return_ayot_pal">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_ayot_pal')) <span class="help-block">{{$errors->first('return_ayot_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('return_ayot_yae')) has-error @endif">
                                                                          <label for="return_ayot_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->return_ayot_yae}}" maxlength="4" type="text" name="return_ayot_yae" id="return_ayot_yae" class="form-control return_ayot_yae">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('return_ayot_yae')) <span class="help-block">{{$errors->first('return_ayot_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label for="before_debit" class="control-label" style="font-size: 20px">ယခုလက်ကျန်  စုစုပေါင်းအလျော့ (100%)</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('now_total_ayot_kyat')) has-error @endif">
                                                                          <label for="now_total_ayot_kyat" class="control-label">ကျပ်</label>
                                                                          <input value="{{$customer->now_total_ayot_kyat}}" type="text" name="now_total_ayot_kyat" id="now_total_ayot_kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_total_ayot_kyat')) <span class="help-block">{{$errors->first('now_total_ayot_kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('now_total_ayot_pal')) has-error @endif">
                                                                          <label for="now_total_ayot_pal" class="control-label">ပဲ</label>
                                                                          <input value="{{$customer->now_total_ayot_pal}}"  type="text" name="now_total_ayot_pal" id="now_total_ayot_pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_total_ayot_pal')) <span class="help-block">{{$errors->first('now_total_ayot_pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('now_total_ayot_yae')) has-error @endif">
                                                                          <label for="now_total_ayot_yae" class="control-label">ရွေး</label>
                                                                          <input value="{{$customer->now_total_ayot_yae}}"  type="text" name="now_total_ayot_yae" id="now_total_ayot_yae" class="form-control ">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('now_total_ayot_yae')) <span class="help-block">{{$errors->first('now_total_ayot_yae')}}</span> @endif
                                                                      </div>
                                                                  </div>


                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('cupon_code')) has-error @endif">
                                                                          <label for="cupon_code" class="control-label">cupon_code</label>
                                                                          <input type="text" value="{{$customer->cupon_code}}" name="cupon_code" id="cupon_code" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('cupon_code')) <span class="help-block">{{$errors->first('cupon_code')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('note')) has-error @endif">
                                                                          <label for="note" class="control-label">Note</label>
                                                                          <textarea name="note" id="note" class="form-control">{{$customer->note}}</textarea>
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('note')) <span class="help-block">{{$errors->first('note')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <div class="col-md-6 text-left" style="margin-top: 15px;">
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  </div>
                                                                  <div class="col-md-6 text-right" style="margin-top: 15px;">
                                                                      <button type="submit" class="btn btn-primary">Confirm</button>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          @csrf
                                                      </form>
                                                  </div>
                                              </div>



                                              <a href="#" data-toggle="modal" data-target="#d{{$customer->sale_invoice_id}}" class="text-danger btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                              <!-- Delete Modal -->
                                              <div class="modal fade" id="d{{$customer->sale_invoice_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <form method="post" action="{{route('order.delete')}}">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> confirm delete invoice</h4>
                                                              </div>
                                                              <div class="modal-body text-danger">
                                                                  <input type="hidden" name="sale_invoice_id" value="{{$customer->sale_invoice_id}}">
                                                                  Are you sure want to delete this invoice of <b>"{{$customer->sale_user_name}}"</b>
                                                              </div>
                                                              <div class="modal-footer text-left">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Confirm</button>
                                                              </div>

                                                          </div>
                                                          @csrf
                                                      </form>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  @endforeach
                              </table>
                          </div>
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