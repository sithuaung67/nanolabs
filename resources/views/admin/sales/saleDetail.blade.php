{{--@extends('admin.layouts.master')--}}

{{--@section('title')--}}
    {{--Invoice History Detail--}}
{{--@stop--}}

{{--@section('style')--}}

{{--@stop--}}

{{--@section('content')--}}
    {{--<!-- Content Wrapper. Contains page content -->--}}
    {{--<div class="content-wrapper">--}}
        {{--<!-- Content Header (Page header) -->--}}
        {{--<section class="content-header">--}}
            {{--<h1>--}}
                {{--<span class="fa fa-list"></span> Invoice Detail--}}
            {{--</h1>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>--}}
                {{--<li class="active">Invoice Detail</li>--}}
            {{--</ol>--}}
        {{--</section>--}}

        {{--<!-- Main content -->--}}
        {{--<section class="content">--}}
            {{--<div class="page-header">--}}
                {{--<button onclick="goBack()" id="back"><i class="fa fa-backward"></i> Go Back</button>--}}

                {{--<script>--}}
                    {{--function goBack() {--}}
                        {{--window.history.back();--}}
                    {{--}--}}
                {{--</script>--}}
                {{--<a href="{{route('customers')}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>--}}
            {{--</div>--}}
            {{--<!-- Small boxes (Stat box) -->--}}
            {{--<div class="row">   `--}}
                {{--<div class="col-md-12">--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6 col-md-offset-3">--}}
                        {{--<div class="panel">--}}
                            {{--<div class="panel-body table-responsive">--}}
                                {{--<table class="table table-hover table-bordered" cellpadding="13" border="1"  id="dataTable4">--}}
                                    {{--<h3 class="text-center">Invoice Number : {{$invoice->voucher_number}}</h3>--}}
                                    {{--<tr>--}}
                                        {{--<td>Voucher Number</td>--}}
                                        {{--<td>{{$invoice->voucher_number}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Customer Name</td>--}}
                                        {{--<td>--}}
                                            {{--@foreach($customer as $cus)--}}
                                                {{--@if($cus->id==$invoice->customer_id)--}}
                                                    {{--{{$cus->customer_name}}--}}
                                                {{--@endif--}}
                                            {{--@endforeach--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Sale Name</td>--}}
                                        {{--<td>--}}
                                            {{--@foreach($sale as $sal)--}}
                                                {{--@if($sal->id==$invoice->sale_user_name)--}}
                                                    {{--{{$sal->sale_name}}--}}
                                                {{--@endif--}}
                                            {{--@endforeach--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Quantity</td>--}}
                                        {{--<td>{{$invoice->qty}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Point Eight</td>--}}
                                        {{--<td>{{$invoice->point_eight}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Kyat</td>--}}
                                        {{--<td>{{$invoice->kyat}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Pal</td>--}}
                                        {{--<td>{{$invoice->pal}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Yway</td>--}}
                                        {{--<td>{{$invoice->yae}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Gram</td>--}}
                                        {{--<td>{{$invoice->gram}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Coupon</td>--}}
                                        {{--<td>{{$invoice->cupon_code}}</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Sale Date</td>--}}
                                        {{--<td>{{date("d-M-Y", strtotime($invoice->sale_date))}}</td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                                {{--<div class="text-right">--}}
                                    {{--<button id="button">Print me</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}
{{--@stop--}}

{{--@section('script')--}}

{{--@stop--}}

@extends('admin.layouts.master')

@section('title')
    Invoice History Detail
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Invoice Detail
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Invoice Detail</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <button onclick="goBack()" id="back"><i class="fa fa-backward"></i> Go Back</button>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
                {{--<a href="{{route('customers')}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>--}}
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">   `
                <div class="col-md-12">

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel">
                            <div class="panel-body table-responsive">
                                <table class="table table-hover table-bordered" border="1"  id="dataTable4">
                                    <h3 class="text-center">Invoice Number : {{$invoice->voucher_number}}</h3>
                                    <tr>
                                        <td>Voucher Number</td>
                                        <td>{{$invoice->voucher_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td>
                                            @foreach($customer as $cus)
                                                @if($cus->id==$invoice->customer_id)
                                                    {{$cus->name}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sale Name</td>
                                        <td>
                                            {{--@foreach($sale as $sal)--}}
                                            {{--@if($sal->id==$invoice->sale_user_name)--}}
                                            {{$invoice->sale_user_name}}
                                            {{--@endif--}}
                                            {{--@endforeach--}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>{{$invoice->qty}}</td>
                                    </tr>
                                    <tr>
                                        <td>Point Eight</td>
                                        <td>{{$invoice->point_eight}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">Gram</td>
                                        <td>{{$invoice->gram}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">Gram</td>
                                        <td style="font-size: 15px">{{$invoice->kyat}} ကျပ် - {{$invoice->pal}} ပဲ - {{$invoice->yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">return_gram</td>
                                        <td>{{$invoice->return_gram}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">now_remain_gram</td>
                                        <td>{{$invoice->now_remain_gram}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">now_remain_gram</td>
                                        <td style="font-size: 15px">{{$invoice->sub_return_kyat}} ကျပ် - {{$invoice->sub_return_pal}} ပဲ - {{$invoice->sub_return_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ရွှေချိန်</td>
                                        <td style="font-size: 15px">{{$invoice->total_kyat}} ကျပ် - {{$invoice->total_pal}} ပဲ - {{$invoice->total_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ယခင်ကျန်</td>
                                        <td style="font-size: 15px">{{$invoice->previous_remain_kyat}} ကျပ် - {{$invoice->previous_remain_pal}} ပဲ - {{$invoice->previous_remain_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">စုစုပေါင်းရွှေချိန်</td>
                                        <td style="font-size: 15px">{{$invoice->buy_debit_kyat}} ကျပ် - {{$invoice->buy_debit_pal}} ပဲ - {{$invoice->buy_debit_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ပြန်ပေးရွှေချိန် + အလျော့</td>
                                        <td style="font-size: 15px">{{$invoice->return_gold_kyat}} ကျပ် - {{$invoice->return_gold_pal}} ပဲ - {{$invoice->return_gold_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ပြန်ပေးရွှေချိန် + အလျော့ result</td>
                                        <td style="font-size: 15px">{{$invoice->net_pay_kyat}} ကျပ် - {{$invoice->net_pay_pal}} ပဲ - {{$invoice->net_pay_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ယခုပေးချေမည့်ရွှေချိန်</td>
                                        <td style="font-size: 15px">{{$invoice->payment_kyat}} ကျပ် - {{$invoice->payment_pal}} ပဲ - {{$invoice->payment_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">လက်ကျန်အကြွေး</td>
                                        <td style="font-size: 15px">{{$invoice->now_remain_kyat}} ကျပ် - {{$invoice->now_remain_pal}} ပဲ - {{$invoice->now_remain_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">စုစုပေါင်းအလျော့</td>
                                        <td style="font-size: 15px">{{$invoice->total_ayot_kyat}} ကျပ် - {{$invoice->total_ayot_pal}} ပဲ - {{$invoice->total_ayot_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ပြန်ပေး အလျော့</td>
                                        <td style="font-size: 15px">{{$invoice->return_ayot_kyat}} ကျပ် - {{$invoice->return_ayot_pal}} ပဲ - {{$invoice->return_ayot_yae}} ရွေး</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">ယခုလက်ကျန်  စုစုပေါင်းအလျော့</td>
                                        <td style="font-size: 15px">{{$invoice->now_total_ayot_kyat}} ကျပ် - {{$invoice->now_total_ayot_pal}} ပဲ - {{$invoice->now_total_ayot_yae}} ရွေး</td>
                                    </tr>

                                    <tr>
                                        <td>Coupon</td>
                                        <td>{{$invoice->cupon_code}}</td>
                                    </tr>
                                    <tr>
                                        <td>Note</td>
                                        <td>{{$invoice->note}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sale Date</td>
                                        <td>{{date("d-M-Y", strtotime($invoice->sale_date))}}</td>
                                    </tr>
                                </table>
                                <div class="text-right">
                                    <button id="button">Print me</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop