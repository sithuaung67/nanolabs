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
                            <table id="TotalPoint" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalQuantity" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
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
                        <input type="date" style="height: auto;" id="date" name="date" class="form-control">
                        <select style="height: 48px;" class="form-control" id="order_number" name="order_number" >
                            <option value="">Order Number</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->order_number}}"> {{$cats->order_number}}  </option>
                            @endforeach
                        </select>
                        {{--<select style="height: 48px;" class="form-control" id="shop" name="shop" >--}}
                            {{--<option value="">Shop</option>--}}
                            {{--@foreach($invoice as $cats)--}}
                                {{--<option value="{{$cats->shop}}"> {{$cats->shop}}  </option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                        <input type="text" style="height: 48px;width: 150px;" placeholder="Select Shop" id="shop" name="shop" class="form-control">
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
                                      <td>Shop</td>
                                      <td>Customer Name</td>
                                      <td>Sale Name</td>
                                      <td>Order_number</td>
                                      <td>Quantity</td>
                                      <td>Promotion Point</td>
                                      <td>Point</td>
                                      <td>Kyat</td>
                                      <td>Pae</td>
                                      <td>Yway</td>
                                      <td>Gram</td>
                                      <td>Coupon</td>
                                      <td>Sale Date</td>
                                      <td>Actions</td>
                                  </tr>
                                  </thead>
                                  <?php $total =0; ?>

                              @foreach($invoice as $customer)
                                      <?php $total ++== $total; ?>
                                      <tr>
                                          <td>{{$total}}</td>
                                          <td>{{$customer->shop}}</td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.customerInfo',['id'=>$customer->customer_name])}}">
                                                  @foreach($customers as $cust)
                                                      @if($cust->id==$customer->customer_name)
                                                          {{$cust->customer_name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.saleInfo',['id'=>$customer->sale_name])}}">
                                                  @foreach($sale as $sal)
                                                      @if($sal->id==$customer->sale_name)
                                                          {{$sal->sale_name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>{{$customer->order_number}}</td>
                                          <td class="quantity">{{$customer->quantity}}</td>
                                          <td>{{$customer->select_point}}</td>
                                          <td class="point">{{$customer->point}}</td>
                                          <td>{{$customer->kyat}}</td>
                                          <td>{{$customer->pae}}</td>
                                          <td>{{$customer->yway}}</td>
                                          <td class="gram">{{$customer->gram}}</td>
                                          <td>{{$customer->coupon}}</td>
                                          <td>{{date("d-M-Y", strtotime($customer->date))}}</td>
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
                                                                  <div class="form-group has-feedback @if($errors->has('customer_name')) has-error @endif">
                                                                      <label for="customer_name" class="control-label">Customer Name</label>
                                                                      <select name="customer_name" id="customer_name" class="form-control">
                                                                          <option value="{{$customer->customer_name}}">{{$customer->customer_name}}</option>
                                                                          @foreach($customers as $cus)
                                                                              <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                                                                          @endforeach
                                                                      </select>
                                                                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                      @if($errors->has('customer_name')) <span class="help-block">{{$errors->first('customer_name')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('sale_name')) has-error @endif">
                                                                      <label for="sale_name" class="control-label">Sale Name</label>
                                                                      <select name="sale_name" id="sale_name" class="form-control">
                                                                          <option value="{{$customer->sale_name}}">{{$customer->sale_name}}</option>
                                                                          @foreach($sale as $cus)
                                                                              <option value="{{$cus->id}}">{{$cus->sale_name}}</option>
                                                                          @endforeach
                                                                      </select>
                                                                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                      @if($errors->has('sale_name')) <span class="help-block">{{$errors->first('sale_name')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('shop')) has-error @endif">
                                                                      <label for="shop" class="control-label"> Shop </label>
                                                                      <input value="{{$customer->shop}}" type="text" name="shop" id="shop" class="form-control">
                                                                      <span class="glyphicon glyphicon-shopping-cart form-control-feedback"></span>
                                                                      @if($errors->has('shop')) <span class="help-block">{{$errors->first('shop')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('date')) has-error @endif">
                                                                      <label for="date" class="control-label"> Date </label>
                                                                      <input value="{{$customer->date}}" type="date" name="date" id="date" class="form-control">
                                                                      <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                                                      @if($errors->has('date')) <span class="help-block">{{$errors->first('date')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('order_number')) has-error @endif">
                                                                      <label for="order_number" class="control-label">Order Number</label>
                                                                      <input value="{{$customer->order_number}}" type="text" name="order_number" id="order_number" class="form-control">
                                                                      <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                      @if($errors->has('order_number')) <span class="help-block">{{$errors->first('order_number')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('quantity')) has-error @endif">
                                                                      <label for="quantity" class="control-label">Quantity</label>
                                                                      <input value="{{$customer->quantity}}" type="number" name="quantity" id="quantity" class="form-control">
                                                                      <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                      @if($errors->has('quantity')) <span class="help-block">{{$errors->first('quantity')}}</span> @endif
                                                                  </div>

                                                                  <div class="form-group has-feedback @if($errors->has('select_point')) has-error @endif">
                                                                      <label for="select_point" class="control-label">Select Point</label>
                                                                      <select name="select_point" id="select_point" class="form-control">
                                                                          <option value="{{$customer->select_point}}">{{$customer->select_point}}</option>
                                                                          <option value="1">Normal</option>
                                                                          <option value="0.8">0.8</option>
                                                                      </select>
                                                                      @if($errors->has('select_point')) <span class="help-block">{{$errors->first('select_point')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('point')) has-error @endif">
                                                                      <label for="point" class="control-label">Point</label>
                                                                      <input value="{{$customer->point}}" type="number" name="point" id="point" class="form-control">
                                                                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                      @if($errors->has('point')) <span class="help-block">{{$errors->first('point')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                                                                      <label for="kyat" class="control-label">Kyat</label>
                                                                      <input value="{{$customer->kyat}}" type="text" name="kyat" id="kyat" class="form-control">
                                                                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                      @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('pae')) has-error @endif">
                                                                      <label for="pae" class="control-label">Pae</label>
                                                                      <input value="{{$customer->pae}}" type="number" name="pae" id="pae" class="form-control">
                                                                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                      @if($errors->has('pae')) <span class="help-block">{{$errors->first('pae')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('yway')) has-error @endif">
                                                                      <label for="yway" class="control-label">Yway</label>
                                                                      <input value="{{$customer->yway}}" type="number" name="yway" id="yway" class="form-control">
                                                                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                      @if($errors->has('yway')) <span class="help-block">{{$errors->first('yway')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                                                                      <label for="gram" class="control-label">Gram</label>
                                                                      <input value="{{$customer->gram}}" type="text" name="gram" id="gram" class="form-control">
                                                                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                      @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                                                                  </div>
                                                                  <div class="form-group has-feedback @if($errors->has('coupon')) has-error @endif">
                                                                      <label for="coupon" class="control-label">Coupon</label>
                                                                      <input value="{{$customer->coupon}}" type="text" name="coupon" id="coupon" class="form-control">
                                                                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                      @if($errors->has('coupon')) <span class="help-block">{{$errors->first('coupon')}}</span> @endif
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Confirm</button>
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
                                                              <div class="modal-footer">
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