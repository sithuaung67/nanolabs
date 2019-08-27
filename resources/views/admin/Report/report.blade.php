@extends('admin.layouts.master')

@section('title')
    Sale Report
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Sale Report
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Sale Report</li>
            </ol>
        </section>
        {{--<div>--}}
            {{--<button id="reportPrint">Print</button>--}}
        {{--</div>--}}
        <?php
        $sql = DB::select('select * from sale_invoices');
        $length=count($sql);
        $j=0;
        $sum=0;
        $name=0;
        $sale_name="";
        $aa=DB::select("DELETE FROM `reports`");
        for($i=1;$i<=$length;$i++){
            $sql1 = DB::select('select * from sale_invoices where sale_user_name = ?', [$i] );
            foreach ($sql1 as $result){
                $sum+=$result->qty;
                $name=$result->sale_user_name;
            }
            $cus=DB::select('select * from sales');
            foreach ($cus as $cu){
                if($cu->name==$name){
                    $sale_name= $cu->id;
                    $sql2=DB::select("INSERT INTO `reports`(`point`,`sale_name`) VALUES ($sum,$sale_name)");
                    $name=0;
                    $sum =0;
                    $sale_name="";
                }
            }
        }
        ?>
        <section class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form id="PrintHello">
                        <div class="col-md-6">
                            <center><h3>Name</h3></center>
                        </div>
                        <div class="col-md-6">
                            <center><h3>Point</h3></center>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <select name="first_name" id="first_name" class="form-control pc10">
                                    <option value="0">Select Sale Name</option>
                                    @foreach($sql6 as $cus)
                                        <option value="{{$cus->point}}">
                                            {{--{{$cus->sale_name}}--}}
                                            @foreach($customer as $cust)
                                                @if($cust->id==$cus->sale_name)
                                                    {{$cust->name}}
                                                @endif
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input placeholder='Total Point' name="num1" id='text10' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <select name="first_name" id="first_name" class="form-control pc11">
                                    <option value="">Select Sale Name</option>
                                    @foreach($sql6 as $cus)
                                        <option value="{{$cus->point}}">
                                            {{--{{$cus->sale_name}}--}}
                                            @foreach($customer as $cust)
                                                @if($cust->id==$cus->sale_name)
                                                    {{$cust->name}}
                                                @endif
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input placeholder='Total Point' name="num2" id='text11' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <select name="first_name" id="first_name" class="form-control pc12">
                                    <option value="">Select Sale Name</option>
                                    @foreach($sql6 as $cus)
                                        <option value="{{$cus->point}}">
                                            {{--{{$cus->sale_name}}--}}
                                            @foreach($customer as $cust)
                                                @if($cust->id==$cus->sale_name)
                                                    {{$cust->name}}
                                                @endif
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input placeholder='Total Point' name="num3" id='text12' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <select name="first_name" id="first_name" class="form-control pc15">
                                    <option value="">Select Sale Name</option>
                                    @foreach($sql6 as $cus)
                                        <option value="{{$cus->point}}">
                                            {{--{{$cus->sale_name}}--}}
                                            @foreach($customer as $cust)
                                                @if($cust->id==$cus->sale_name)
                                                    {{$cust->name}}
                                                @endif
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input placeholder='Total Point' name="num4" id='text15' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <select name="first_name" id="first_name" class="form-control pc14">
                                    <option value="">Select Sale Name</option>
                                    @foreach($sql6 as $cus)
                                        <option value="{{$cus->point}}">
                                            {{--{{$cus->sale_name}}--}}
                                            @foreach($customer as $cust)
                                                @if($cust->id==$cus->sale_name)
                                                    {{$cust->name}}
                                                @endif
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input placeholder='Total Point' name="num5" id='text14' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <h4>Total Point</h4>
                            </div>
                            <div class="form-group col-md-6">
                                <input placeholder='Total' name="num5" id='showpoint' type='text' class='form-control'>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop
