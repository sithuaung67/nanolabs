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
                            <table class="table table-hover table-bordered" id="dataTable2">
                                <thead>
                                <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                                    <td>ID</td>
                                    <td>Voucher Number</td>
                                    <td>Customer Name</td>
                                    <td>Sale Name</td>
                                    <td>Quantity</td>
                                    <td>Point Eight</td>
                                    <td>Gram</td>
                                    <td>Kyat</td>
                                    <td>Pae</td>
                                    <td>Yae</td>
                                    <td>previous_remain_kyat</td>
                                    <td>previous_remain_pal</td>
                                    <td>previous_remain_yae</td>
                                    <td>buy_debit_kyat</td>
                                    <td>buy_debit_pal</td>
                                    <td>buy_debit_yae</td>
                                    <td>payment_kyat</td>
                                    <td>payment_pal</td>
                                    <td>payment_yae</td>
                                    <td>now_remain_kyat</td>
                                    <td>now_remain_pal</td>
                                    <td>now_remain_yae</td>
                                    <td>total_ayot_kyat</td>
                                    <td>total_ayot_pal</td>
                                    <td>total_ayot_yae</td>
                                    <td>Coupon Code</td>
                                    <td>Order Date</td>
                                </tr>
                                </thead>
                                <?php $total = 0; ?>
                                <?php $totals = 0; ?>
                            @foreach($invoice as $customer)
                                    @if($customers->id==$customer->customer_id)
                                        <?php $total ++== $total; ?>
                                        <?php $totals += $customer->point; ?>
                                            <tr>
                                                <td>{{$total}}</td>
                                                <td><a href="{{route('get.customerInvoiceInfo',['id'=>$customer->sale_invoice_id])}}">{{$customer->voucher_number}}</a></td>
                                                <td>{{$customers->user_name}}</td>
                                                <td>
                                                    @foreach($sale as $sal)
                                                        @if($sal->id==$customer->sale_user_name)
                                                            {{$sal->name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="quantity">{{$customer->qty}}</td>
                                                <td class="point">{{$customer->point_eight}}</td>
                                                <td class="gram">{{$customer->gram}}</td>
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
                                                <td>{{$customer->cupon_code}}</td>
                                                <td>{{date("d-M-Y", strtotime($customer->sale_date))}}</td>
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