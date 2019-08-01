@extends('admin.layouts.master')

@section('title')
    Order History Detail
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Order Detail
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Order Detail</li>
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
                                    <h3 class="text-center">Order Number : {{$invoice->voucher_number}}</h3>
                                    <tr>
                                        <td>Voucher Number</td>
                                        <td>{{$invoice->voucher_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td>
                                            @foreach($customer as $cus)
                                                @if($cus->id==$invoice->customer_id)
                                                    {{$cus->customer_name}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sale Name</td>
                                        <td>
                                            @foreach($sale as $sal)
                                                @if($sal->id==$invoice->sale_user_name)
                                                    {{$sal->sale_name}}
                                                @endif
                                            @endforeach
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
                                        <td>Kyat</td>
                                        <td>{{$invoice->kyat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pal</td>
                                        <td>{{$invoice->pal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Yway</td>
                                        <td>{{$invoice->yae}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gram</td>
                                        <td>{{$invoice->gram}}</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon</td>
                                        <td>{{$invoice->cupon_code}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ring</td>
                                        <td>{{$invoice->ring}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ring Number</td>
                                        <td>{{$invoice->ring_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ring Point Eight</td>
                                        <td>{{$invoice->ring_point_eight}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ring Kyat</td>
                                        <td>{{$invoice->ring_kyat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ring Pal</td>
                                        <td>{{$invoice->ring_pal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ring Yae</td>
                                        <td>{{$invoice->ring_yae}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bangles</td>
                                        <td>{{$invoice->bangles}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bangles Number</td>
                                        <td>{{$invoice->bangles_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bangles Point Eight</td>
                                        <td>{{$invoice->bangles_point_eight}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bangles Kyat</td>
                                        <td>{{$invoice->bangles_kyat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bangles Pal</td>
                                        <td>{{$invoice->bangles_pal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bangles Yae</td>
                                        <td>{{$invoice->bangles_yae}}</td>
                                    </tr>
                                    <tr>
                                        <td>Necklace</td>
                                        <td>{{$invoice->necklace}}</td>
                                    </tr>
                                    <tr>
                                        <td>Necklace Number</td>
                                        <td>{{$invoice->necklace_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Necklace Point Eight</td>
                                        <td>{{$invoice->necklace_point_eight}}</td>
                                    </tr>
                                    <tr>
                                        <td>Necklace Kyat</td>
                                        <td>{{$invoice->necklace_kyat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Necklace Pal</td>
                                        <td>{{$invoice->necklace_pal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Necklace Yae</td>
                                        <td>{{$invoice->necklace_yae}}</td>
                                    </tr>
                                    <tr>
                                        <td>Earring</td>
                                        <td>{{$invoice->earring}}</td>
                                    </tr>
                                    <tr>
                                        <td>Earring Number</td>
                                        <td>{{$invoice->earring_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Earring Point Eight</td>
                                        <td>{{$invoice->earring_point_eight}}</td>
                                    </tr>
                                    <tr>
                                        <td>Earring Kyat</td>
                                        <td>{{$invoice->earring_kyat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Earring Pal</td>
                                        <td>{{$invoice->earring_pal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Earring Yae</td>
                                        <td>{{$invoice->earring_yae}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sale Date</td>
                                        <td>{{date("d-M-Y", strtotime($invoice->order_date))}}</td>
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