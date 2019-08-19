@extends('admin.layouts.master')

@section('title')
    Customer Account Setting
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-cog"></span> Customer Account Setting
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-cog"></i> Admin Panel</a></li>
                <li class="active">Customer Account Setting</li>
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
                        <a id="gobutton" href="{{route('customers.invoice.history',['id'=>$customers->id])}}" class="btn">Customer Invoice <i class="fa fa-forward"></i></a>
                        {{--<a id="gobutton" href="{{route('customers.order.history',['id'=>$customers->id])}}"  class="btn">Customer Order <i class="fa fa-forward"></i></a>--}}
                    </div>
                </div>
            </div>
            <div class="page-header">
            </div>
            <div class="col-md-4 col-md-offset-4 table-responsive">

                <div class="text-center">
                    {{--<span class="fa fa-user-circle fa-5x"></span>--}}
                    {!! QrCode::size(200)->generate($customers); !!}


                </div>
                <br>
                <table class="table table-hover" style="background: floralwhite">
                    <tbody>
                    <tr>
                        <td class="col-md-4">ID</td>
                        <td style="color: #1c00cf">{{$customers->id}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">User Name</td>
                        <td style="color: #1c00cf">{{$customers->user_name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Customer Name</td>
                        <td style="color: #1c00cf">{{$customers->name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">NRC</td>
                        <td style="color: #1c00cf">{{$customers->nrc}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Date Of Birthday</td>
                        <td style="color: #1c00cf">{{date("d-M-Y", strtotime($customers->dob))}}</td>

                    </tr>
                    <tr>
                        <td class="col-md-4">Phone</td>
                        <td style="color: #1c00cf">{{$customers->phone_number}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Shop Name</td>
                        <td style="color: #1c00cf">{{$customers->shop_name}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Address</td>
                        <td style="color: #1c00cf">{{$customers->address}}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">Township</td>
                        <td style="color: #1c00cf">{{$customers->town}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop