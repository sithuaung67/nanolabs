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
                                    <td>Voucher Number</td>
                                    <td>Customer Name</td>
                                    <td>Sale Name</td>
                                    <td>Quantity</td>
                                    <td>Point Eight</td>
                                    <td>Kyat</td>
                                    <td>Pae</td>
                                    <td>Yae</td>
                                    <td>Gram</td>
                                    <td>Coupon Code</td>
                                    <td>Ring</td>
                                    <td>Ring Number</td>
                                    <td>Ring Point Eight</td>
                                    <td>Ring Kyat</td>
                                    <td>Ring Pal</td>
                                    <td>Ring Yae</td>
                                    <td>Bangles</td>
                                    <td>Bangles Number</td>
                                    <td>Bangles Point Eight</td>
                                    <td>Bangles Kyat</td>
                                    <td>Bangles Pal</td>
                                    <td>Bangles Yae</td>
                                    <td>Necklace</td>
                                    <td>Necklace Number</td>
                                    <td>Necklace Point Eight</td>
                                    <td>Necklace Kyat</td>
                                    <td>Necklace Pal</td>
                                    <td>Necklace Yae</td>
                                    <td>Earring</td>
                                    <td>Earring Number</td>
                                    <td>Earring Point Eight</td>
                                    <td>Earring Kyat</td>
                                    <td>Earring Pal</td>
                                    <td>Earring Yae</td>
                                    <td>Order Date</td>
                                </tr>
                                </thead>
                                <?php $total = 0; ?>
                                @foreach($invoice as $customer)
                                    @if($sale->id==$customer->sale_user_name)
                                        <?php $total ++== $total; ?>

                                        {{--<tr>--}}
                                            {{--<td>{{$total}}</td>--}}
                                            {{--<td><a id="invoiceHistory" href="{{route('get.saleInvoiceInfo',['id'=>$customers->id])}}">{{$customers->invoice_number}}</a></td>--}}
                                            {{--<td>{{$customers->shop}}</td>--}}
                                            {{--<td>{{$sale->sale_name}}</td>--}}
                                            {{--<td>--}}
                                                {{--@foreach($customer as $cust)--}}
                                                    {{--@if($cust->id==$customers->customer_name)--}}
                                                        {{--{{$cust->customer_name}}--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</td>--}}
                                            {{--<td class="quantity">{{$customers->quantity}}</td>--}}
                                            {{--<td>{{$customers->select_point}}</td>--}}
                                            {{--<td class="point">{{$customers->point}}</td>--}}
                                            {{--<td>{{$totals}}</td>--}}
                                            {{--<td>{{$customers->kyat}}</td>--}}
                                            {{--<td>{{$customers->pal}}</td>--}}
                                            {{--<td>{{$customers->ywaw}}</td>--}}
                                            {{--<td class="gram">{{$customers->gram}}</td>--}}
                                            {{--<td>{{$customers->coupon}}</td>--}}
                                            {{--<td>{{date("d-M-Y", strtotime($customers->date))}}</td>--}}
                                        {{--</tr>--}}
                                            <tr>
                                                <td>{{$total}}</td>
                                                <td><a id="invoiceHistory" href="{{route('get.saleInvoiceInfo',['id'=>$customer->id])}}">{{$customer->voucher_number}}</a></td>
                                                <td>
                                                    @foreach($customers as $cust)
                                                        @if($cust->id==$customer->customer_id)
                                                            {{$cust->customer_name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$sale->sale_name}}</td>
                                                <td class="quantity">{{$customer->qty}}</td>
                                                <td class="point">{{$customer->point_eight}}</td>
                                                <td>{{$customer->kyat}}</td>
                                                <td>{{$customer->pal}}</td>
                                                <td>{{$customer->yae}}</td>
                                                <td class="gram">{{$customer->gram}}</td>
                                                <td>{{$customer->cupon_code}}</td>
                                                <td>{{$customer->ring}}</td>
                                                <td>{{$customer->ring_number}}</td>
                                                <td>{{$customer->ring_point_eight}}</td>
                                                <td>{{$customer->ring_kyat}}</td>
                                                <td>{{$customer->ring_pal}}</td>
                                                <td>{{$customer->ring_yae}}</td>
                                                <td>{{$customer->bangles}}</td>
                                                <td>{{$customer->bangles_number}}</td>
                                                <td>{{$customer->bangles_point_eight}}</td>
                                                <td>{{$customer->bangles_kyat}}</td>
                                                <td>{{$customer->bangles_pal}}</td>
                                                <td>{{$customer->bangles_yae}}</td>
                                                <td>{{$customer->necklace}}</td>
                                                <td>{{$customer->necklace_number}}</td>
                                                <td>{{$customer->necklace_point_eight}}</td>
                                                <td>{{$customer->necklace_kyat}}</td>
                                                <td>{{$customer->necklace_pal}}</td>
                                                <td>{{$customer->necklace_yae}}</td>
                                                <td>{{$customer->earring}}</td>
                                                <td>{{$customer->earring_number}}</td>
                                                <td>{{$customer->earring_point_eight}}</td>
                                                <td>{{$customer->earring_kyat}}</td>
                                                <td>{{$customer->earring_pal}}</td>
                                                <td>{{$customer->earring_yae}}</td>
                                                <td>{{date("d-M-Y", strtotime($customer->order_date))}}</td>
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