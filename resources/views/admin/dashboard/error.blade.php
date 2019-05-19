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
            <h1 class="text-danger">
                <span class="fa fa-warning "></span> Error >> Permission Denied
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-warning"></i> Error </a></li>
                <li class="active"> Permission Denied</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                   <h1 class="text-center">
                       <i class="fa fa-warning fa-5x text-danger"></i>

                   </h1>
                    <h2 class="text-center text-danger">Your account don't have permission to access the page.</h2>
                </div>

            </div>
            <!-- /.row -->


        </section>
    </div>
@stop

@section('script')

@stop