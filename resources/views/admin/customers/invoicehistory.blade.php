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
                <a href="{{route('get.customerInfo',['id'=>$customer->id])}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <div class="row">
                        <div class="col-md-3">
                            <table id="TotalPoint" class="table text-center" style="background: grey;color: white;width: 100%;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalQuantity" class="table text-center" style="background: grey;color: white;width: 100%;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGram" class="table text-center" style="background: grey;color: white;width: 100%;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGam" class="table text-center" style="background: grey;color: white;width: 100%;">
                            </table>
                        </div>
                    </div>
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

                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" id="dataTable1">
                                <thead>
                                <tr style="background: grey ;color:#fff; font-weight: bold">
                                    <td>Shop</td>
                                    <td>Customer Name</td>
                                    <td>Sale Name</td>
                                    <td>Invoice_No</td>
                                    <td>Quantity</td>
                                    <td>Promotion Point</td>
                                    <td>Point</td>
                                    <td>Kyat</td>
                                    <td>Pal</td>
                                    <td>Ywaw</td>
                                    <td>Gram</td>
                                    <td>Coupon</td>
                                    <td>Sale Date</td>
                                </tr>
                                </thead>
                                @foreach($invoice as $customers)
                                    @if($customer->id==$customers->customer_name)

                                    <tr>
                                        <td>{{$customers->shop}}</td>
                                        <td>
                                            @if($customer->id==$customers->customer_name)
                                                {{$customer->customer_name}}
                                            @endif
                                        </td>
                                        <td>
                                            @foreach($sale as $sal)
                                                @if($sal->id==$customers->sale_name)
                                                    {{$sal->sale_name}}
                                                @endif
                                            @endforeach
                                        </td>

                                        <td><a style="color: #1c00cf;" href="{{route('get.customerInvoiceInfo',['id'=>$customers->id])}}">{{$customers->invoice_number}}</a></td>
                                        <td class="quantity">{{$customers->quantity}}</td>
                                        <td>{{$customers->select_point}}</td>
                                        <td class="point">{{$customers->point}}</td>
                                        <td>{{$customers->kyat}}</td>
                                        <td>{{$customers->pal}}</td>
                                        <td>{{$customers->ywaw}}</td>
                                        <td class="gram">{{$customers->gram}}</td>
                                        <td>{{$customers->coupon}}</td>
                                        <td>{{date("d-M-Y", strtotime($customers->date))}}</td>
                                    </tr>
                                    @endif
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