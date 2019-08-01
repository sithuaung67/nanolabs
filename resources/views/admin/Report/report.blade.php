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

        <table class="table table-hover table-bordered" style="margin-top: 50px;background: #5bc0de;" border="1">
            <thead>
            <tr style="background: #1e282c;color: white">
                <th class="col-md-2">Rank</th>
                <th class="col-md-4">Name</th>
                <th class="col-md-4">Point</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = DB::select('select * from sale_invoices');
            $length=count($sql);
            $j=0;
            $sum=0;
            $name=0;
            $customer_name="";
            for($i=1;$i<=$length;$i++){
                echo '<tr>';
                $sql1 = DB::select('select * from sale_invoices where customer_id = ? ', [$i] );
                foreach ($sql1 as $result){
                    $sum+=$result->qty;
                    $name=$result->customer_id;

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
    <?php
    $sql = DB::select('select * from sale_invoices');
    $length=count($sql);
    $j=0;
    $sum=0;
    $name=0;
    $customer_name="";
    for($i=1;$i<=$length;$i++){
        $sql1 = DB::select('select * from sale_invoices where customer_id = ? ', [$i] );
        foreach ($sql1 as $result){
            $sum+=$result->qty;
            $name=$result->customer_id;

        }
//        $cus=DB::select('select * from customers');
//        foreach ($cus as $cu){
//            if($cu->id==$name){
//                $customer_name= $cu->customer_name;
//                if($customer_name!="null"){
//                    $j++==$j;
////                    echo "<td>$j</td>";
//
//                    echo "<div class='form-group''>";
//                    echo "<select class='pc0'>";
//                    echo "<option value=''>Select Name</option>";
//                    echo "<option value='$sum'>$customer_name</option>";
//                    echo "</select>";
//                    echo "</div>";
////                    echo "<td>$sum</td>";
//                    $name=0;
//                    $sum =0;
//                    $customer_name="";
//                }
//
//            }
//        }
        }
        $cusw=DB::select('select * from customers');
                    echo "<div class='form-group'>";
                    echo "<select class='pc0'>";
                    echo "<option value=''>Select Name</option>";
        foreach ($cusw as $item) {
            echo "<option value='$sum'>$item->customer_name</option>";
        }
        echo "</select>";
        echo "</div>";

        echo "<input placeholder='text3' id='text1' type='text' class='form-control' style='margin-top: 10px;' '>";

        ?>


    </div>
@stop

@section('script')

@stop
