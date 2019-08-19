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
                <div class="col-md-12">
                    <div class="col-md-6">
                        <button onclick="goBack()" id="back"><i class="fa fa-backward"></i> Go Back</button>

                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="CustomerQrcode">Print me</button>

                    </div>
                </div>

                {{--<a href="{{route('customers')}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>--}}
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">   `
                <div class="col-md-12">

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4" id="QrcodeCustomer">
                        {!! QrCode::size(280)->generate($customer->name); !!}
                    </div>
                </div>

            </div>
        </section>
    </div>
@stop

@section('script')

@stop