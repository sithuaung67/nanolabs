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
                <button onclick="goBack()" id="back"><i class="fa fa-backward"></i> Go Back</button>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
                {{--<a href="{{route('get.customerInfo',['id'=>$customer->id])}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>--}}
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <div class="row">
                        <div class="col-md-3">
                            <table id="TotalPoint" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalQuantity" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
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
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">

                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" id="dataTable1">
                                <thead>
                                <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                                    <td>ID</td>
                                    <td>Invoice_No</td>
                                    <td>Shop</td>
                                    <td>Sale Name</td>
                                    <td>Customer Name</td>
                                    <td>Quantity</td>
                                    <td>Promotion Point</td>
                                    <td>Point</td>
                                    <td>Total</td>
                                    <td>Kyat</td>
                                    <td>Pae</td>
                                    <td>Yway</td>
                                    <td>Gram</td>
                                    <td>Coupon</td>
                                    <td>Sale Date</td>
                                </tr>
                                </thead>
                                <?php $total = 0; ?>
                                <?php $totals = 0; ?>
                                @foreach($invoice as $customers)
                                    @if($sale->id==$customers->sale_name)
                                        <?php $total ++== $total; ?>
                                        <?php $totals += $customers->point; ?>

                                        <tr>
                                            <td>{{$total}}</td>
                                            <td><a id="invoiceHistory" href="{{route('get.saleInvoiceInfo',['id'=>$customers->id])}}">{{$customers->invoice_number}}</a></td>
                                            <td>{{$customers->shop}}</td>
                                            <td>{{$sale->sale_name}}</td>
                                            <td>
                                                @foreach($customer as $cust)
                                                    @if($cust->id==$customers->customer_name)
                                                        {{$cust->customer_name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="quantity">{{$customers->quantity}}</td>
                                            <td>{{$customers->select_point}}</td>
                                            <td class="point">{{$customers->point}}</td>
                                            <td>{{$totals}}</td>
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
        </section>
    </div>
@stop

@section('script')

@stop