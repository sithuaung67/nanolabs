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
                                <table class="table table-hover table-bordered" cellpadding="13" border="1"  id="dataTable4">
                                    <h3 class="text-center">Invoice Number : {{$invoice->invoice_number}}</h3>
                                    <tr>
                                        <td>Invoice Number</td>
                                        <td>{{$invoice->invoice_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shop</td>
                                        <td>{{$invoice->shop}}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td>
                                            @foreach($customer as $cust)
                                                @if($cust->id==$invoice->customer_name)
                                                    {{$cust->customer_name}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sale Name</td>
                                        <td>
                                            @foreach($sale as $sal)
                                                @if($sal->id==$invoice->sale_name)
                                                    {{$sal->sale_name}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>{{$invoice->quantity}}</td>
                                    </tr>
                                    <tr>
                                        <td>Promotion Point</td>
                                        <td>{{$invoice->select_point}}</td>
                                    </tr>
                                    <tr>
                                        <td>Point</td>
                                        <td>{{$invoice->point}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kyat</td>
                                        <td>{{$invoice->kyat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pae</td>
                                        <td>{{$invoice->pal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Yway</td>
                                        <td>{{$invoice->ywaw}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gram</td>
                                        <td>{{$invoice->gram}}</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon</td>
                                        <td>{{$invoice->coupon}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sale Date</td>
                                        <td>{{date("d-M-Y", strtotime($invoice->date))}}</td>
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