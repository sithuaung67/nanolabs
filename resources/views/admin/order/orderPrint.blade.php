@extends('admin.layouts.master')

@section('title')
    Order Print
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Order Print
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Order Print</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <button onclick="goBack()" id="back"><i class="fa fa-backward"></i> Go Back</button>

                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <button id="buttonPrint">Print</button>
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
                        <div class="panel-heading" style="background: #1e282c;color: #ffffff">
                            Order / List
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" cellpadding="14" border="1" id="dataTableInvoicePrint">
                                <thead>
                                <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                                    <td>ID</td>
                                    <td>Shop</td>
                                    <td>Customer Name</td>
                                    <td>Sale Name</td>
                                    <td>Order_No</td>
                                    <td>Quantity</td>
                                    <td>Promotion Point</td>
                                    <td>Point</td>
                                    <td>Kyat</td>
                                    <td>Pae</td>
                                    <td>Yway</td>
                                    <td>Gram</td>
                                    <td>Coupon</td>
                                    <td>Sale Date</td>
                                </tr>
                                </thead>
                                @foreach($invoice as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td>{{$customer->shop}}</td>
                                        <td>
                                            <a style="color: #1c00cf;" href="{{route('get.customerInfo',['id'=>$customer->customer_name])}}">
                                                @foreach($customers as $cust)
                                                    @if($cust->id==$customer->customer_name)
                                                        {{$cust->customer_name}}
                                                    @endif
                                                @endforeach
                                            </a>
                                        </td>
                                        <td>
                                            <a style="color: #1c00cf;" href="{{route('get.saleInfo',['id'=>$customer->sale_name])}}">
                                                @foreach($sale as $sal)
                                                    @if($sal->id==$customer->sale_name)
                                                        {{$sal->sale_name}}
                                                    @endif
                                                @endforeach
                                            </a>
                                        </td>
                                        <td>{{$customer->order_number}}</td>
                                        <td>{{$customer->quantity}}</td>
                                        <td>{{$customer->select_point}}</td>
                                        <td>{{$customer->point}}</td>
                                        <td>{{$customer->kyat}}</td>
                                        <td>{{$customer->pae}}</td>
                                        <td>{{$customer->yway}}</td>
                                        <td>{{$customer->gram}}</td>
                                        <td>{{$customer->coupon}}</td>
                                        <td>{{date("d-M-Y", strtotime($customer->date))}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop