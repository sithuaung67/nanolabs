@extends('admin.layouts.master')

@section('title')
    Invoice
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Invoice
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Invoice</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <a href="{{route('get.newInvoice')}}" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-plus-circle"></i> New Invoice</a>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if(Session('info'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                        </div>
                    </div>
                @endif
              <div class="col-md-12">
                    <div class="panel">
                          <div class="panel-heading" style="background: #1e282c;color: #ffffff">
                              Invoice / List
                          </div>
                          <div class="panel-body">

                          </div>
                    </div>
              </div>
            </div>
        </section>
    </div>
@stop

@section('script')

@stop