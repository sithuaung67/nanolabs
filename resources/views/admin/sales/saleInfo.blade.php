@extends('admin.layouts.master')

@section('title')
    Sale Account Setting
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-cog"></span> Sale Account Setting
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-cog"></i> Admin Panel</a></li>
                <li class="active">Sale Account Setting</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <button onclick="goBack()" id="back"><i class="fa fa-backward"></i> Go Back</button>

                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
                        {{--<a href="{{route('customers')}}" class="btn" style="background: #1e282c;color: #ffffff;"><i class="fa fa-backward"></i> Back Customer</a>--}}
                    </div>
                    <div class="col-md-6 text-right">
                        <a id="gobutton" href="{{route('sales.invoice.history',['id'=>$sale->id])}}" class="btn">Sale Invoice <i class="fa fa-forward"></i></a>
                        <a id="gobutton" href="{{route('sales.order.history',['id'=>$sale->id])}}" class="btn">Sale Order <i class="fa fa-forward"></i></a>

                    </div>
                </div>
            </div>
            <div class="page-header">
            </div>
            <div class="col-md-4 col-md-offset-4 table-responsive">

                <div class="text-center">
                    {!! QrCode::size(200)->generate($sale); !!}

                </div>
                <br>
                <table class="table table-hover" style="background: floralwhite">
                    <tbody>
                    <tr>
                        <td class="col-md-4">ID</td>
                        <td style="color: #1c00cf">{{$sale->id}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">User Name</td>
                        <td style="color: #1c00cf">{{$sale->user_name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Saler Name</td>
                        <td style="color: #1c00cf">{{$sale->sale_name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Date Of Birthday</td>
                        <td style="color: #1c00cf">{{date("d-M-Y", strtotime($sale->birthday))}}</td>

                    </tr>
                    <tr>
                        <td class="col-md-4">Phone</td>
                        <td style="color: #1c00cf">{{$sale->phone}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Address</td>
                        <td style="color: #1c00cf">{{$sale->address}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Township</td>
                        <td style="color: #1c00cf">{{$sale->town}}</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </section>
        @if(Session('info'))
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                </div>
            </div>
        @endif
    </div>
@stop

@section('script')

@stop