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
                {{--<a href="{{route('customers')}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>--}}
                
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">   `
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
                            <table class="table table-hover table-bordered" id="dataTable4">
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
                                <tr>
                                    <td>{{$invoice->shop}}</td>
                                    <td>
                                        @foreach($customer as $customers)
                                            @if($customers->id==$invoice->customer_name)
                                                {{$customers->customer_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($sale as $sal)
                                            @if($sal->id==$invoice->sale_name)
                                                {{$sal->sale_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$invoice->invoice_number}}</td>
                                    <td>{{$invoice->quantity}}</td>
                                    <td>{{$invoice->select_point}}</td>
                                    <td>{{$invoice->point}}</td>
                                    <td>{{$invoice->kyat}}</td>
                                    <td>{{$invoice->pal}}</td>
                                    <td>{{$invoice->ywaw}}</td>
                                    <td>{{$invoice->gram}}</td>
                                    <td>{{$invoice->coupon}}</td>
                                    <td>{{date("d-M-Y", strtotime($invoice->date))}}</td>
                                </tr>
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