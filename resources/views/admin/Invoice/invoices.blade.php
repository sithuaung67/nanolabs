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
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('get.newInvoice')}}" id="SearchButton" class="btn" style="background: #1e282c;color: white;"><i class="fa fa-plus-circle"></i> New Invoice</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <a href="{{route('print.Invoice')}}" id="print" class="btn">Print <i class="fa fa-forward"></i></a>
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
                            <table id="TotalPoint" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table id="TotalGram" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">
                            </table>
                        </div>
                        <div class="col-md-3">
                            {{--<table id="TotalGam" class="table text-center" style="background: #1e282c;color: white;width: 100%;border-radius: 20px;">--}}
                            {{--</table>--}}
                        </div>
                    </div>
                </div>
            </div>

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
            <?php
            $sql = DB::select('select * from sale_invoices');
            $length=count($sql);
            $j=0;
            $sum=0;
            $name=0;
            $sale_name="";
            $aa=DB::select("DELETE FROM `reports`");
            for($i=1;$i<=$length;$i++){
                $sql1 = DB::select('select * from sale_invoices where sale_user_name = ?', [$i] );
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

            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <form class="form-inline" action="{{route("search.invoice")}}" method="get">
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
                                <option value="{{$cats->sale_user_name}}">
                                    {{--{{$cats->sale_user_name}}--}}
                                    @foreach($sale as $cust)
                                        @if($cust->id==$cats->sale_user_name)
                                            {{$cust->name}}
                                        @endif
                                    @endforeach
                                </option>
                            @endforeach
                        </select>
                        <select class="form-control" id="customer_id" name="customer_id" >
                            <option value="">customer_id</option>
                            @foreach($invoice as $cats)
                                <option value="{{$cats->customer_id}}">
                                    {{--{{$cats->customer_id}}--}}
                                    @foreach($customers as $cust)
                                        @if($cust->id==$cats->customer_id)
                                            {{$cust->user_name}}
                                        @endif
                                    @endforeach
                                </option>
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
                              Invoice / List
                          </div>
                          <div class="panel-body table-responsive">
                              <table class="table table-hover table-bordered" id="dataTableInvoice">
                                  <thead>
                                  <tr style="background: #1e282c ;color:#fff; font-weight: bold">
                                      <td>ID</td>
                                      <td>Customer Name</td>
                                      <td>Sale Name</td>
                                      <td>Town</td>
                                      <td>Voucher Number</td>
                                      <td>Normal</td>
                                      <td>Point Eight</td>
                                      <td>Gram</td>
                                      <td style="font-size: 17px;">ကျပ်</td>
                                      <td style="font-size: 17px;">ပဲ</td>
                                      <td style="font-size: 17px;">ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">ယခင်ကျန် ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">ယခင်ကျန် ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">ယခင်ကျန် ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">စုစုပေါင်းရွှေချိန် ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">စုစုပေါင်းရွှေချိန် ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">စုစုပေါင်းရွှေချိန် ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">ယခုပေးချေမည့်ရွှေချိန် ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">ယခုပေးချေမည့်ရွှေချိန် ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">ယခုပေးချေမည့်ရွှေချိန် ရွေး</td>
                                      <td style="font-size: 17px;text-align: center">လက်ကျန်အကြွေး ကျပ်</td>
                                      <td style="font-size: 17px;text-align: center">လက်ကျန်အကြွေး ပဲ</td>
                                      <td style="font-size: 17px;text-align: center">လက်ကျန်အကြွေး ရွေး</td>
                                      <td style="font-size: 17px;">အလျော့ကျပ်</td>
                                      <td style="font-size: 17px;">အလျော့ပဲ</td>
                                      <td style="font-size: 17px;">အလျော့ရွေး</td>
                                      <td>Name</td>
                                      <td>Date</td>
                                      <td>Note</td>
                                      <td>Cupon Code</td>
                                      <td>Sale Date</td>
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
                                                          {{$cust->name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.saleInfo',['id'=>$customer->sale_user_name])}}">
                                                  @foreach($sale as $sal)
                                                      @if($sal->id==$customer->sale_user_name)
                                                          {{$sal->name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.saleInfo',['id'=>$customer->sale_user_name])}}">
                                                  @foreach($customers as $sal)
                                                      @if($sal->id==$customer->customer_id)
                                                          {{$sal->town}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>{{$customer->voucher_number}}</td>
                                          <td class="quantity">{{$customer->qty}}</td>
                                          <td class="point_eight">{{$customer->point_eight}}</td>
                                          <td class="gram" >{{$customer->gram}}</td>
                                          <td>{{$customer->kyat}}</td>
                                          <td>{{$customer->pal}}</td>
                                          <td>{{$customer->yae}}</td>
                                          <td>{{$customer->previous_remain_kyat}}</td>
                                          <td>{{$customer->previous_remain_pal}}</td>
                                          <td>{{$customer->previous_remain_yae}}</td>
                                          <td>{{$customer->buy_debit_kyat}}</td>
                                          <td>{{$customer->buy_debit_pal}}</td>
                                          <td>{{$customer->buy_debit_yae}}</td>
                                          <td>{{$customer->payment_kyat}}</td>
                                          <td>{{$customer->payment_pal}}</td>
                                          <td>{{$customer->payment_yae}}</td>
                                          <td>{{$customer->now_remain_kyat}}</td>
                                          <td>{{$customer->now_remain_pal}}</td>
                                          <td>{{$customer->now_remain_yae}}</td>
                                          <td class="kyat">{{$customer->total_ayot_kyat}}</td>
                                          <td class="pal">{{$customer->total_ayot_pal}}</td>
                                          <td class="yae">{{$customer->total_ayot_yae}}</td>
                                          <td>
                                              <a style="color: #1c00cf;" href="{{route('get.saleInfo',['id'=>$customer->sale_user_name])}}">
                                                  @foreach($sale as $sal)
                                                      @if($sal->id==$customer->sale_user_name)
                                                          {{$sal->name}}
                                                      @endif
                                                  @endforeach
                                              </a>
                                          </td>
                                          <td>{{$customer->updated_at}}</td>
                                          <td>{{$customer->note}}</td>
                                          <td>{{$customer->cupon_code}}</td>
                                          <td>{{date("d-M-Y", strtotime($customer->sale_date))}}</td>
                                          <td class="btn btn-default ">

                                              {{--<a href="{{route('get.edit',['id'=>$customer->id])}}" class="btn btn-outline-light btn-sm"><i class="fas fa-edit"></i></a>--}}
                                              <a href="#" data-toggle="modal" data-target="#e{{$customer->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>

                                              <!-- Edit Modal -->
                                              <div class="modal fade" id="e{{$customer->id}}"  role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <form method="post" action="{{route('invoice.update')}}">
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
                                                                          <input type="text" name="qty" id="qty" value="{{$customer->normal}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('qty')) <span class="help-block">{{$errors->first('qty')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                      <div id="form-group" class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                                                                          <label for="gram" class="control-label">gram</label>
                                                                          <input type="text" name="gram" id="gram" class="form-control ex1">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                      <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                                                                          <label for="kyat" class="control-label">kyat</label>
                                                                          <input type="text" name="kyat" id="kyat" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                      <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                                                                          <label for="pal" class="control-label">pal</label>
                                                                          <input type="text" name="pal" id="pal" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                      <div class="form-group has-feedback @if($errors->has('yae')) has-error @endif">
                                                                          <label for="yae" class="control-label">yae</label>
                                                                          <input type="text" name="yae" id="yae" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('yae')) <span class="help-block">{{$errors->first('yae')}}</span> @endif
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                      <div class="form-group has-feedback @if($errors->has('cupon_code')) has-error @endif">
                                                                          <label for="cupon_code" class="control-label">cupon_code</label>
                                                                          <input type="text" name="cupon_code" id="cupon_code" value="{{$customer->cupon_code}}" class="form-control">
                                                                          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                                                          @if($errors->has('cupon_code')) <span class="help-block">{{$errors->first('cupon_code')}}</span> @endif
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
                                                      <form method="post" action="{{route('invoice.delete')}}">
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