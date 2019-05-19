@extends('admin.layouts.master')

@section('title')
    Dashboard
    @stop

@section('style')

    @stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-dashboard"></span> Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Sale</h3>
                            <p>Cashier</p>

                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>44 <sup style="font-size: 20px">items </sup></h3>

                            <p>Today Report</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>22</h3>

                            <p>Employees</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>32 <sup style="font-size: 20px">items </sup></h3>

                            <p>Product Items</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->




        </section>
    </div>
    @stop

@section('script')

    @stop