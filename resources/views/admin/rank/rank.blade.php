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
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center"><strong><h2>Customers Ranking Table</h2></strong></div>
                    <div class="panel">
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" cellpadding="13" border="1" id="RankTable">
                                <thead>
                                <tr style="background: #1e282c;color: white">
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Point</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = DB::select('select * from invoices ');
                                $j=0;
                                $sum=0;
                                $name=0;
                                $customer_name="";
                                for($i=1;$i<=count($sql);$i++){

                                echo '<tr>';
                                    $sql1 = DB::select('select * from invoices where customer_name = ?', [$i] );



                                    foreach ($sql1 as $result){
                                        $sum+=$result->point;
                                        $name=$result->customer_name;
                                    }
                                    $cus=DB::select('select * from customers');
                                    foreach ($cus as $cu){
                                        if($cu->id==$name){
                                            $customer_name= $cu->customer_name;
                                            if($customer_name!="null"){
                                                $j++==$j;
                                            echo "<td>$j</td>";
                                            echo "<td>$customer_name</td>";
                                            echo "<td>$sum</td>";

                                                $name=0;
                                                $sum =0;
                                                $customer_name="";
                                        }
                                        }
                                    }
                                    echo '</tr>';
                                }

                                ?>
                                </tbody>
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
