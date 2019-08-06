@extends('admin.layouts.master')

@section('title')
    Order
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Order
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
                <li class="active">Order</li>
            </ol>
        </section>
    <?php
    $sql = DB::select('select * from order_invoices');
    $length=count($sql);
    $j=0;
    $sum=0;
    $name=0;
    $customer_name="";
    $aa=DB::select("DELETE FROM `scores`");
    for($i=1;$i<=$length;$i++){
        $sql1 = DB::select('select * from order_invoices where customer_id = ?', [$i] );
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

        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('get.newOrder')}}" id="SearchButton" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-plus-circle"></i> New Invoice</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <a href="{{route('print.Order')}}" id="print" class="btn">Print <i class="fa fa-forward"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <div class="row">
                        <div class="col-md-3">
                            <table id="TotalQuantity" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalPointEight" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGram" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGam" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <form class="form-inline" action="{{route("search.order")}}" method="get">
                        <input type="date"  id="order_date" name="order_date" class="form-control">
                        <select class="form-control" id="voucher_number" name="voucher_number" >
                            <option value="">voucher_number</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->voucher_number}}"> {{$cats->voucher_number}}  </option>
                            @endforeach
                        </select>
                        <select class="form-control" id="sale_user_name" name="sale_user_name" >
                            <option value="">sale_user_name</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->sale_user_name}}">{{$cats->sale_user_name}}</option>
                            @endforeach
                        </select>
                        <select class="form-control" id="customer_id" name="customer_id" >
                            <option value="">customer_id</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->customer_id}}"> {{$cats->customer_id}}  </option>
                            @endforeach
                        </select>
                        <button id="SearchButton" class="btn" type="submit"><i class="fa fa-search"></i></button>
                        @csrf
                    </form>
                </div>
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
                              Order / List
                          </div>
                          <div class="panel-body table-responsive">
                              <table class="table table-hover table-bordered" id="dataTable">
                                  <thead>
                                  <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                                      <td>ID</td>
                                      <td>Customer Name</td>
                                      <td>Sale Name</td>
                                      <td>Voucher Number</td>
                                      <td>Quantity</td>
                                      <td>Point Eight</td>
                                      <td>Kyat</td>
                                      <td>Pae</td>
                                      <td>Yae</td>
                                      <td>Gram</td>
                                      <td>Cupon Code</td>
                                      <td>Ring</td>
                                      <td>Ring Number</td>
                                      <td>Ring Point Eight</td>
                                      <td>Ring Kyat</td>
                                      <td>Ring Pal</td>
                                      <td>Ring Yae</td>
                                      <td>Bangles</td>
                                      <td>Bangles Number</td>
                                      <td>Bangles Point Eight</td>
                                      <td>Bangles Kyat</td>
                                      <td>Bangles Pal</td>
                                      <td>Bangles Yae</td>
                                      <td>Necklace</td>
                                      <td>Necklace Number</td>
                                      <td>Necklace Point Eight</td>
                                      <td>Necklace Kyat</td>
                                      <td>Necklace Pal</td>
                                      <td>Necklace Yae</td>
                                      <td>Earring</td>
                                      <td>Earring Number</td>
                                      <td>Earring Point Eight</td>
                                      <td>Earring Kyat</td>
                                      <td>Earring Pal</td>
                                      <td>Earring Yae</td>
                                      <td>Order Date</td>
                                      <td>Actions</td>
                                  </tr>
                                  </thead>
                                  <?php $total =0; ?>

                              @foreach($invoice as $customer)
                                      <?php $total ++== $total; ?>
                                      <tr>
                                          <td>{{$total}}</td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.customerInfo',['id'=>$customer->customer_id])}}">
                                                  @foreach($customers as $cust)
                                                      @if($cust->id==$customer->customer_id)
                                                          {{$cust->customer_name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.saleInfo',['id'=>$customer->sale_user_name])}}">
                                                  @foreach($sale as $sal)
                                                      @if($sal->id==$customer->sale_user_name)
                                                          {{$sal->sale_name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>{{$customer->voucher_number}}</td>
                                          <td class="quantity">{{$customer->qty}}</td>
                                          <td class="point_eight">{{$customer->point_eight}}</td>
                                          <td>{{$customer->kyat}}</td>
                                          <td>{{$customer->pal}}</td>
                                          <td>{{$customer->yae}}</td>
                                          <td class="gram" >{{$customer->gram}}</td>
                                          <td>{{$customer->cupon_code}}</td>
                                          <td>{{$customer->ring}}</td>
                                          <td>{{$customer->ring_number}}</td>
                                          <td>{{$customer->ring_point_eight}}</td>
                                          <td>{{$customer->ring_kyat}}</td>
                                          <td>{{$customer->ring_pal}}</td>
                                          <td>{{$customer->ring_yae}}</td>
                                          <td>{{$customer->bangles}}</td>
                                          <td>{{$customer->bangles_number}}</td>
                                          <td>{{$customer->bangles_point_eight}}</td>
                                          <td>{{$customer->bangles_kyat}}</td>
                                          <td>{{$customer->bangles_pal}}</td>
                                          <td>{{$customer->bangles_yae}}</td>
                                          <td>{{$customer->necklace}}</td>
                                          <td>{{$customer->necklace_number}}</td>
                                          <td>{{$customer->necklace_point_eight}}</td>
                                          <td>{{$customer->necklace_kyat}}</td>
                                          <td>{{$customer->necklace_pal}}</td>
                                          <td>{{$customer->necklace_yae}}</td>
                                          <td>{{$customer->earring}}</td>
                                          <td>{{$customer->earring_number}}</td>
                                          <td>{{$customer->earring_point_eight}}</td>
                                          <td>{{$customer->earring_kyat}}</td>
                                          <td>{{$customer->earring_pal}}</td>
                                          <td>{{$customer->earring_yae}}</td>
                                          <td>{{date("d-M-Y", strtotime($customer->order_date))}}</td>
                                          <td class="btn btn-default ">
                                              <a href="#" data-toggle="modal" data-target="#e{{$customer->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>

                                              <!-- Edit Modal -->
                                              <div class="modal fade" id="e{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <form method="post" action="{{route('order.update')}}">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                  <h4 class="modal-title" id="myModalLabel">Edit Order Information</h4>
                                                              </div>
                                                              <div class="modal-body text-left">
                                                                  <input type="hidden" name="id" value="{{$customer->id}}">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('voucher_number')) has-error @endif">
                                                                          <label for="voucher_number" class="control-label">Voucher Number</label>
                                                                          <input type="text" value="{{$customer->voucher_number}}" name="voucher_number" id="voucher_number" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('voucher_number')) <span class="help-block">{{$errors->first('voucher_number')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group has-feedback @if($errors->has('sale_user_name')) has-error @endif">
                                                                        <label for="sale_user_name" class="control-label">sale_user_name</label>
                                                                        <select name="sale_user_name" id="sale_user_name" class="form-control">
                                                                            <option value="{{$customer->sale_user_name}}">{{$customer->sale_user_name}}</option>
                                                                            @foreach($sale as $cus)
                                                                            <option value="{{$cus->id}}">{{$cus->sale_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                        @if($errors->has('sale_user_name')) <span class="help-block">{{$errors->first('sale_user_name')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="form-group has-feedback @if($errors->has('customer_id')) has-error @endif">
                                                                        <label for="customer_id" class="control-label">Customer Name</label>
                                                                        <select name="customer_id" id="customer_id" class="form-control">
                                                                         <option value="{{$customer->customer_id}}">{{$customer->customer_id}}</option>
                                                                         @foreach($customers as $cus)
                                                                        <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                        @if($errors->has('customer_id')) <span class="help-block">{{$errors->first('customer_id')}}</span> @endif
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('order_date')) has-error @endif">
                                                                          <label for="order_date" class="control-label">Date</label>
                                                                          <input type="date" value="{{$customer->order_date}}" name="order_date" id="order_date" class="form-control">
                                                                          <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                                                          @if($errors->has('order_date')) <span class="help-block">{{$errors->first('order_date')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('point_eight')) has-error @endif">
                                                                          <label for="point_eight" class="control-label">point_eight</label>
                                                                          <input type="text" name="point_eight" value="{{$customer->point_eight}}" id="point_eight" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('point_eight')) <span class="help-block">{{$errors->first('point_eight')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('qty')) has-error @endif">
                                                                          <label for="qty" class="control-label">Quantity</label>
                                                                          <input type="text" name="qty" id="qty" value="{{$customer->qty}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('qty')) <span class="help-block">{{$errors->first('qty')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                                                                          <label for="kyat" class="control-label">kyat</label>
                                                                          <input type="text" name="kyat" value="{{$customer->kyat}}" id="kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                                                                          <label for="pal" class="control-label">pal</label>
                                                                          <input type="text" name="pal" id="pal" value="{{$customer->pal}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('yae')) has-error @endif">
                                                                          <label for="yae" class="control-label">yae</label>
                                                                          <input type="text" name="yae" id="yae" value="{{$customer->yae}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('yae')) <span class="help-block">{{$errors->first('yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                                                                          <label for="gram" class="control-label">gram</label>
                                                                          <input type="text" name="gram" id="gram" value="{{$customer->gram}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-group has-feedback @if($errors->has('cupon_code')) has-error @endif">
                                                                          <label for="cupon_code" class="control-label">cupon_code</label>
                                                                          <input type="text" name="cupon_code" id="cupon_code" value="{{$customer->cupon_code}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('cupon_code')) <span class="help-block">{{$errors->first('cupon_code')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('ring')) has-error @endif">
                                                                              <label for="ring" class="control-label">ring</label>
                                                                              <input type="text" name="ring" id="ring" value="{{$customer->ring}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('ring')) <span class="help-block">{{$errors->first('ring')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('ring_number')) has-error @endif">
                                                                              <label for="ring_number" class="control-label">ring_number</label>
                                                                              <input type="text" name="ring_number" value="{{$customer->ring_number}}" id="ring_number" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('ring_number')) <span class="help-block">{{$errors->first('ring_number')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('ring_point_eight')) has-error @endif">
                                                                              <label for="ring_point_eight" class="control-label">ring_point_eight</label>
                                                                              <input type="text" name="ring_point_eight" value="{{$customer->ring_point_eight}}" id="ring_point_eight" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('ring_point_eight')) <span class="help-block">{{$errors->first('ring_point_eight')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('ring_kyat')) has-error @endif">
                                                                              <label for="ring_kyat" class="control-label">ring_kyat</label>
                                                                              <input type="text" name="ring_kyat" id="ring_kyat" value="{{$customer->ring_kyat}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('ring_kyat')) <span class="help-block">{{$errors->first('ring_kyat')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('ring_pal')) has-error @endif">
                                                                              <label for="ring_pal" class="control-label">ring_pal</label>
                                                                              <input type="text" name="ring_pal" id="ring_pal" value="{{$customer->ring_pal}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('ring_pal')) <span class="help-block">{{$errors->first('ring_pal')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('ring_yae')) has-error @endif">
                                                                              <label for="ring_yae" class="control-label">ring_yae</label>
                                                                              <input type="text" name="ring_yae" value="{{$customer->ring_yae}}" id="ring_yae" class="form-control">
                                                                              <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                              @if($errors->has('ring_yae')) <span class="help-block">{{$errors->first('ring_yae')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('bangles')) has-error @endif">
                                                                              <label for="bangles" class="control-label">bangles</label>
                                                                              <input type="text" name="bangles" value="{{$customer->bangles}}" id="bangles" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('bangles')) <span class="help-block">{{$errors->first('bangles')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('bangles_number')) has-error @endif">
                                                                              <label for="bangles_number" class="control-label">bangles_number</label>
                                                                              <input type="text" name="bangles_number" value="{{$customer->bangles_number}}" id="bangles_number" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('bangles_number')) <span class="help-block">{{$errors->first('bangles_number')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('bangles_point_eight')) has-error @endif">
                                                                              <label for="bangles_point_eight" class="control-label">bangles_point_eight</label>
                                                                              <input type="text" name="bangles_point_eight" value="{{$customer->bangles_point_eight}}" id="bangles_point_eight" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('bangles_point_eight')) <span class="help-block">{{$errors->first('bangles_point_eight')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('bangles_kyat')) has-error @endif">
                                                                              <label for="bangles_kyat" class="control-label">bangles_kyat</label>
                                                                              <input type="text" name="bangles_kyat" value="{{$customer->bangles_kyat}}" id="bangles_kyat" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('bangles_kyat')) <span class="help-block">{{$errors->first('bangles_kyat')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('bangles_pal')) has-error @endif">
                                                                              <label for="bangles_pal" class="control-label">bangles_pal</label>
                                                                              <input type="text" name="bangles_pal" value="{{$customer->bangles_pal}}" id="bangles_pal" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('bangles_pal')) <span class="help-block">{{$errors->first('bangles_pal')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('bangles_yae')) has-error @endif">
                                                                              <label for="bangles_yae" class="control-label">bangles_yae</label>
                                                                              <input type="text" name="bangles_yae" value="{{$customer->bangles_yae}}" id="bangles_yae" class="form-control">
                                                                              <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                              @if($errors->has('bangles_yae')) <span class="help-block">{{$errors->first('bangles_yae')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('necklace')) has-error @endif">
                                                                              <label for="necklace" class="control-label">necklace</label>
                                                                              <input type="text" name="necklace" id="necklace" value="{{$customer->necklace}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('necklace')) <span class="help-block">{{$errors->first('necklace')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('necklace_number')) has-error @endif">
                                                                              <label for="necklace_number" class="control-label">necklace_number</label>
                                                                              <input type="text" name="necklace_number" value="{{$customer->necklace_number}}" id="necklace_number" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('necklace_number')) <span class="help-block">{{$errors->first('necklace_number')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('necklace_point_eight')) has-error @endif">
                                                                              <label for="necklace_point_eight" class="control-label">necklace_point_eight</label>
                                                                              <input type="text" name="necklace_point_eight" value="{{$customer->necklace_point_eight}}" id="necklace_point_eight" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('necklace_point_eight')) <span class="help-block">{{$errors->first('necklace_point_eight')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('necklace_kyat')) has-error @endif">
                                                                              <label for="necklace_kyat" class="control-label">necklace_kyat</label>
                                                                              <input type="text" name="necklace_kyat" value="{{$customer->necklace_kyat}}" id="necklace_kyat" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('necklace_kyat')) <span class="help-block">{{$errors->first('necklace_kyat')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('necklace_pal')) has-error @endif">
                                                                              <label for="necklace_pal" class="control-label">necklace_pal</label>
                                                                              <input type="text" name="necklace_pal" id="necklace_pal" value="{{$customer->necklace_pal}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('necklace_pal')) <span class="help-block">{{$errors->first('necklace_pal')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('necklace_yae')) has-error @endif">
                                                                              <label for="necklace_yae" class="control-label">necklace_yae</label>
                                                                              <input type="text" name="necklace_yae" id="necklace_yae" value="{{$customer->necklace_yae}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                              @if($errors->has('necklace_yae')) <span class="help-block">{{$errors->first('necklace_yae')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('earring')) has-error @endif">
                                                                              <label for="earring" class="control-label">Earring</label>
                                                                              <input type="text" name="earring" id="necklace" value="{{$customer->earring}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('earring')) <span class="help-block">{{$errors->first('earring')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('earring_number')) has-error @endif">
                                                                              <label for="earring_number" class="control-label">earring_number</label>
                                                                              <input type="text" name="earring_number" value="{{$customer->earring_number}}" id="earring_number" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('earring_number')) <span class="help-block">{{$errors->first('earring_number')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('earring_point_eight')) has-error @endif">
                                                                              <label for="earring_point_eight" class="control-label">earring_point_eight</label>
                                                                              <input type="text" name="earring_point_eight" value="{{$customer->earring_point_eight}}" id="earring_point_eight" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('earring_point_eight')) <span class="help-block">{{$errors->first('earring_point_eight')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-4" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('earring_kyat')) has-error @endif">
                                                                              <label for="earring_kyat" class="control-label">earring_kyat</label>
                                                                              <input type="text" name="earring_kyat" id="earring_kyat" value="{{$customer->earring_kyat}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('earring_kyat')) <span class="help-block">{{$errors->first('earring_kyat')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-6" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('earring_pal')) has-error @endif">
                                                                              <label for="earring_pal" class="control-label">earring_pal</label>
                                                                              <input type="text" name="earring_pal" value="{{$customer->earring_pal}}" id="earring_pal" class="form-control">
                                                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                              @if($errors->has('earring_pal')) <span class="help-block">{{$errors->first('earring_pal')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-6" style="margin-top: 15px;">
                                                                          <div class="form-group has-feedback @if($errors->has('earring_yae')) has-error @endif">
                                                                              <label for="earring_yae" class="control-label">earring_yae</label>
                                                                              <input type="text" name="earring_yae" id="earring_yae" value="{{$customer->earring_yae}}" class="form-control">
                                                                              <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                              @if($errors->has('earring_yae')) <span class="help-block">{{$errors->first('earring_yae')}}</span> @endif
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              <div class="modal-footer">
                                                                  <div class="col-md-6 text-left" style="margin-top: 15px;">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  </div>
                                                                  <div class="col-md-6 text-right" style="margin-top: 15px;">
                                                                      <button type="submit" class="btn btn-primary">Confirm</button>
                                                                  </div>
                                                              </div>

                                                          </div>
                                                          @csrf
                                                      </form>
                                                  </div>
                                              </div>



                                              <a href="#" data-toggle="modal" data-target="#d{{$customer->id}}" class="text-danger btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                              <!-- Delete Modal -->
                                              <div class="modal fade" id="d{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <form method="post" action="{{route('order.delete')}}">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> confirm delete invoice</h4>
                                                              </div>
                                                              <div class="modal-body text-danger">
                                                                  <input type="hidden" name="id" value="{{$customer->id}}">
                                                                  Are you sure want to delete this invoice of <b>"{{$customer->sale_name}}"</b>
                                                              </div>
                                                              <div class="modal-footer text-left">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Confirm</button>
                                                              </div>

                                                          </div>
                                                          {{csrf_field()}}
                                                      </form>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  @endforeach
                              </table>
                          </div>
                    </div>
              </div>
            </div>
            @if(Session('info'))
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                    </div>
                </div>
            @endif
        </section>
    </div>
@stop

@section('script')

@stop