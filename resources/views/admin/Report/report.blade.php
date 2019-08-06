@extends('admin.layouts.master')

@section('title')
    Customer Ranking
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Customer Ranking
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Customer Rnaking</li>
            </ol>
        </section>
        <?php
        $sql = DB::select('select * from order_invoices');
        $length=count($sql);
        $j=0;
        $sum=0;
        $name=0;
        $sale_name="";
        $aa=DB::select("DELETE FROM `reports`");
        for($i=1;$i<=$length;$i++){
            $sql1 = DB::select('select * from order_invoices where sale_user_name = ?', [$i] );
            foreach ($sql1 as $result){
                $sum+=$result->qty;
                $name=$result->sale_user_name;
            }
            $cus=DB::select('select * from sales');
            foreach ($cus as $cu){
                if($cu->id==$name){
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
            <form>
                <div class="col-md-12">
                <div class="form-group col-md-2">
                    <label for="first_name" class="control-label">Person1</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="first_name" class="control-label">Person2</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="first_name col-md-3" class="control-label">Person3</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="first_name" class="control-label">Person4</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2" style="margin-top: 15px;">
                    <input placeholder='Total Point' id='text1' type='text' class='form-control' style='margin-top: 10px;'>
                </div>
                 <div class="form-group col-md-2" style="margin-top: 20px;">
                     <button id="SearchButton" type="submit" style="background: #1e282c;color: white;" class="btn btn-sm">Save</button>
                 </div>
                </div>
            </form>
            <form>
                <div class="form-group">
                    <label for="first_name" class="control-label">Person1</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="first_name" class="control-label">Person2</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group>
                    <label for="first_name col-md-3" class="control-label">Person3</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="first_name" class="control-label">Person4</label>
                    <select name="first_name" id="first_name" class="form-control pc0">
                        <option value="">Select Sale Name</option>
                        @foreach($sql6 as $cus)
                            <option value="{{$cus->point}}">{{$cus->sale_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <input placeholder='Total Point' id='text1' type='text' class='form-control' style='margin-top: 10px;'>
                </div>
                 <div class="form-group" style="margin-top: 20px;">
                     <button id="SearchButton" type="submit" style="background: #1e282c;color: white;" class="btn btn-sm">Save</button>
                 </div>
            </form>

        </section>
    </div>
@stop

@section('script')

@stop
