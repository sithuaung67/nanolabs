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
                    <div class="col-md-4">
                        <button style="color: black;" id="hide">Hide/Show</button>
                    </div>
                    <div class="col-md-8">
                        <strong><h2>Customers Ranking Table</h2></strong>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered" cellpadding="13" border="1" id="sum">
                                <thead>
                                <tr style="background: #1e282c;color: white">
                                    <th >Rank</th>
                                    <th>Name</th>
                                    <th>Point</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sql6 as $value)
                                <tr>
                                <td class='id'>{{$value->rank}}</td>
                                <td>
                                @foreach($name as $na)
                                    @if($na->id==$value->name)
                                        {{$na->user_name}}
                                    @endif
                                @endforeach
                                </td>
                                <td>{{$value->score}}</td>
                                </tr>
                                @endforeach
                                    <?php
                                    $sql = DB::select('select * from sale_invoices');
                                    $length=count($sql);
                                    $j=0;
                                    $sum=0;
                                    $name=0;
                                    $customer_name="";
                                    $aa=DB::select("DELETE FROM `scores`");
                                    for($i=1;$i<=$length;$i++){
                                    $sql1 = DB::select('select * from sale_invoices where customer_id = ?', [$i] );
                                    foreach ($sql1 as $result){
                                    $sum+=$result->qty;

                                    $name=$result->customer_id;
                                    }
                                    $cus=DB::select('select * from customers');
                                    foreach ($cus as $cu){
                                    if($cu->id==$name){
                                    $customer_name= $cu->id;
                                    $sql2=DB::select("INSERT INTO `scores`(`score`,`name`) VALUES ($sum,$customer_name)");
                                    $name=0;
                                    $sum =0;
                                    $customer_name="";
                                    }
                                    }
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
<script language="javascript">
</script>
@section('script')

@stop



{{--else if($inputValPal === $totalayotpal){--}}
{{--$testing=parseInt($('#now_total_ayot_pal').val()+15);--}}
{{--$('#now_total_ayot_pal').val($testing);--}}
{{--$totalayotyae1=parseFloat($totalayotyae)+8;--}}
{{--$totalayotyae2=parseFloat($totalayotyae1-$inputValYae).toFixed(2);--}}
{{--$('#now_total_ayot_yae').val($totalayotyae2);--}}
{{--}--}}







