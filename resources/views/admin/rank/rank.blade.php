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

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <button id="RankButton">Print me</button>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<button style="color: black;" id="hide">Hide/Show</button>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8">--}}
                        {{--<strong><h2>Customers Ranking Table</h2></strong>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="panel">--}}
                        {{--<div class="panel-body table-responsive">--}}
                            {{--<table class="table table-hover table-bordered" cellpadding="13" border="1" id="RankTable">--}}
                                {{--<thead>--}}
                                {{--<tr style="background: #1e282c;color: white">--}}
                                    {{--<th class="col-md-2" id="id">Rank</th>--}}
                                    {{--<th class="col-md-4">Name</th>--}}
                                    {{--<th class="col-md-4">Point</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--<?php--}}
                                {{--$sql = DB::select('select * from invoices');--}}
                                {{--$length=count($sql);--}}
                                {{--$j=0;--}}
                                {{--$sum=0;--}}
                                {{--$name=0;--}}
                                {{--$customer_name="";--}}
                                {{--for($i=1;$i<=$length;$i++){--}}
                                    {{--echo '<tr>';--}}
                                    {{--$sql1 = DB::select('select * from invoices where customer_name = ? ', [$i] );--}}
                                    {{--foreach ($sql1 as $result){--}}
                                        {{--$sum+=$result->point;--}}
                                        {{--$name=$result->customer_name;--}}

                                    {{--}--}}
                                    {{--$cus=DB::select('select * from customers');--}}
                                    {{--foreach ($cus as $cu){--}}
                                        {{--if($cu->id==$name){--}}
                                            {{--$customer_name= $cu->customer_name;--}}
                                            {{--if($customer_name!="null"){--}}
                                                {{--$j++==$j;--}}
                                                {{--echo "<td class='id'>$j</td>";--}}
                                                {{--echo "<td>$customer_name</td>";--}}
                                                {{--echo "<td>$sum</td>";--}}
                                                {{--$name=0;--}}
                                                {{--$sum =0;--}}
                                                {{--$customer_name="";--}}
                                            {{--}--}}
                                        {{--}--}}
                                    {{--}--}}
                                    {{--echo '</tr>';--}}
                                {{--}--}}
                                {{--?>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <?php
            if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
                $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;



                //html PNG location prefix
                $PNG_WEB_DIR = 'uploads/';

                if(!file_exists($PNG_TEMP_DIR)){
                    mkdir($PNG_TEMP_DIR);
                }



                $filename	=	$PNG_WEB_DIR.time().uniqid('-QR-').'.png';

                //processing form input
                //remember to sanitize user input in real-life solution !!!
                $errorCorrectionLevel = $_REQUEST['level'];
                $matrixPointSize = $_REQUEST['size'];
                //default data

                $link	=	$_REQUEST['userdata'];

                QRcode::png($link, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
            }
            ?>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="ml-2 col-sm-6">
                        <?php if(isset($link) and $link!=""){?>
                        <div class="alert alert-success">QR created for <strong>[<?php echo $link;?>]</strong></div>
                        <div class="text-center"><img src="<?php echo $PNG_WEB_DIR.basename($filename); ?>" /></div>
                        <?php } ?>
                        <form method="post">
                            <div class="form-group">
                                <label>Create QR</label>
                                <input type="text" name="userdata" id="userdata" class="form-control" placeholder="Enter URL and create QR" required>
                            </div>
                            <div class="form-group">
                                <label>QR Code Level</label>
                                <select name="level" class="form-control">
                                    <option value="L">L - smallest</option>
                                    <option value="M" selected="">M</option>
                                    <option value="Q">Q</option>
                                    <option value="H">H - best</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>QR Code Size</label>
                                <select name="size" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Upload" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </section>

    </div>
@stop

@section('script')

@stop
