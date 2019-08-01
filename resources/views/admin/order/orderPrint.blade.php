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
                    <div class="pagination">
                        {{$invoice->links()}}
                    </div>
                    <div class="panel">
                        <div class="panel-heading" style="background: #1e282c;color: #ffffff">
                            Order / List
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" cellpadding="14" border="1" id="dataTableInvoicePrint">
                                <tr>
                                    <td>
                                        VoucherNo
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->id}}
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
                                                    {{$cust->customer_name}}
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
                                        <td>
                                            @foreach($sale as $sal)
                                                @if($sal->id==$customer->sale_user_name)
                                                    {{$sal->sale_name}}
                                                @endif
                                            @endforeach
                                        </td>
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
                                            {{$customer->order_date}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        Ring
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->ring}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        RingNo
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->ring_number}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        RingPointEight
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->ring_point_eight}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        RingKyat
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->ring_kyat}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        RingPal
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->ring_pal}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        RingYae
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->ring_yae}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        Bangles
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->bangles}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        BanglesNo
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->bangles_number}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        BanglesPointEight
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->bangles_point_eight}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        BanglesKyat
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->bangles_kyat}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        BanglesPal
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->bangles_pal}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        BanglesYae
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->bangles_yae}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        Necklace
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->necklace}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        NecklaceNo
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->necklace_number}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        NecklacePointEight
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->necklace_point_eight}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        NecklaceKyat
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->necklace_kyat}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        NecklacePal
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->necklace_pal}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        NecklaceYae
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->necklace_yae}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        Earring
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->earring}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        EarringNo
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->earring_number}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        EarringPointEight
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->earring_point_eight}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        EarringKyat
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->earring_kyat}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        EarringPal
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->earring_pal}}
                                        </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>
                                        EarringYae
                                    </td>
                                    @foreach($invoice as $customer)
                                        <td>
                                            {{$customer->earring_yae}}
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