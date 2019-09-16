@extends('admin.layouts.master')

@section('title')
    Invoice Print
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Invoice Print
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Invoice Print</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('invoices')}}" class="btn" id="back_invoices_price" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>
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
                    <div class="pagination">
                        {{$invoice->links()}}
                    </div>
                    <div class="panel">
                        <div class="panel-heading" style="background: #1e282c;color: #ffffff">
                            Invoice / List
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" border="1" id="dataTableInvoicePrint">
                                <tr>
                                    <td>
                                        VoucherNo
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->voucher_number}}
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                   <td>
                                       CustomerName
                                   </td>
                                    @foreach($invoice as $customer)
                                    <td>
                                        @foreach($customers as $cust)
                                           @if($cust->id==$customer->customer_id)
                                                {{$cust->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    @endforeach
                                </tr>

                                   <tr>
                                   <td>
                                       SaleName
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>{{$customer->sale_user_name}}</td>
                                    @endforeach
                                   </tr>
                                   <tr>
                                   <td>
                                       Quantity
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->qty}}
                                        </td>
                                    @endforeach
                                   </tr>

                                   <tr>
                                   <td>
                                       PointEight
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->point_eight}}
                                        </td>
                                    @endforeach
                                   </tr>

                                   <tr>
                                   <td>
                                       Kyat
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->kyat}}
                                        </td>
                                    @endforeach
                                   </tr>

                                   <tr>
                                   <td>
                                       Pal
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->pal}}
                                        </td>
                                    @endforeach
                                   </tr>

                                   <tr>
                                   <td>
                                       Yae
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->yae}}
                                        </td>
                                    @endforeach
                                   </tr>

                                   <tr>
                                   <td>
                                       Gram
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->gram}}
                                        </td>
                                    @endforeach
                                   </tr>

                                   <tr>
                                   <td>
                                       CuponCode
                                   </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                        {{$customer->cupon_code}}
                                        </td>
                                    @endforeach
                                    </tr>
                                <tr>
                                    <td>
                                        Date
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->sale_date}}
                                        </td>
                                    @endforeach
                                </tr>
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