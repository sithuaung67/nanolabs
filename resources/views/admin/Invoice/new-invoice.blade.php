@extends('admin.layouts.master')

@section('title')
    Invoice
@stop

@section('style')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-user-plus"></span> New Invoice
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Admin Panel</a></li>
                <li class="active">New Invoice</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="content" style=" padding-bottom: 100%;">
            <div class="page-header">
                <a href="{{route('invoices')}}" class="btn" id="back_invoices_price" style="background: #1e282c;color: white;"><i class="fa fa-backward"></i> Back Account</a>
            </div>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form enctype="multipart/form-data" method="post" action="{{route('post.invoice.new')}}">
                    <div class="col-md-12">
                        <div class="form-group has-feedback @if($errors->has('voucher_number')) has-error @endif">
                            <label for="voucher_number" class="control-label">voucher_number</label>
                            <input type="text" name="voucher_number" id="voucher_number" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('voucher_number')) <span class="help-block">{{$errors->first('voucher_number')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback @if($errors->has('sale_user_name')) has-error @endif">
                            <label for="sale_user_name" class="control-label">sale_user_name</label>
                            <select name="sale_user_name" id="sale_user_name" class="form-control">
                                <option value="">Select Sale Name</option>
                                @foreach($sale as $cus)
                                    <option value="{{$cus->id}}">{{$cus->name}}</option>
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
                                <option value="">Select Customer Name</option>
                                @foreach($customer as $cus)
                                    <option value="{{$cus->id}}">{{$cus->user_name}}</option>
                                @endforeach
                            </select>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if($errors->has('customer_id')) <span class="help-block">{{$errors->first('customer_id')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('order_date')) has-error @endif">
                            <label for="order_date" class="control-label"> Date </label>
                            <input type="date" name="order_date" id="order_date" class="form-control">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            @if($errors->has('order_date')) <span class="help-block">{{$errors->first('order_date')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('normal')) has-error @endif">
                            <label for="normal" class="control-label">Normal</label>
                            <input type="text" name="normal" id="normal" class="form-control pa0">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('normal')) <span class="help-block">{{$errors->first('normal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('point_eight')) has-error @endif">
                            <label for="point_eight" class="control-label">point_eight</label>
                            <input type="text" name="point_eight" id="point_eight" class="form-control pa0">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('point_eight')) <span class="help-block">{{$errors->first('point_eight')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group has-feedback @if($errors->has('gram')) has-error @endif">
                            <label for="gram" class="control-label">gram</label>
                            <input type="text" name="gram" id="gram" class="form-control pc1">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('gram')) <span class="help-block">{{$errors->first('gram')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('kyat')) has-error @endif">
                            <label for="kyat" class="control-label">ကျပ်</label>
                            <input type="text" name="kyat" id="kyat" class="form-control pc2">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('kyat')) <span class="help-block">{{$errors->first('kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('pal')) has-error @endif">
                            <label for="pal" class="control-label">ပဲ</label>
                            <input onkeyup="enterNumber()" type="text" name="pal" id="pal" class="form-control pc3">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('pal')) <span class="help-block">{{$errors->first('pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('yae')) has-error @endif">
                            <label for="yae" class="control-label">ရွေး</label>
                            <input type="text" name="yae" id="yae" class="form-control pc4">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('yae')) <span class="help-block">{{$errors->first('yae')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="before_debit" class="control-label" style="font-size: 20px">ယခုဝယ်ယူသည့်ပမာဏ</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_kyat')) has-error @endif">
                            <label for="total_kyat" class="control-label">ကျပ်</label>
                            <input type="text" name="total_kyat" id="total_kyat" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_kyat')) <span class="help-block">{{$errors->first('total_kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_pal')) has-error @endif">
                            <label for="total_pal" class="control-label">ပဲ</label>
                            <input onkeyup="enterNumber()" type="text" name="total_pal" id="total_pal" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_pal')) <span class="help-block">{{$errors->first('total_pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_yae')) has-error @endif">
                            <label for="total_yae" class="control-label">ရွေး</label>
                            <input type="text" name="total_yae" id="total_yae" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_yae')) <span class="help-block">{{$errors->first('total_yae')}}</span> @endif
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="before_debit" class="control-label" style="font-size: 20px">ယခင်လက်ကျန်အကြွေး</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('previous_remain_kyat')) has-error @endif">
                            <label for="previous_remain_kyat" class="control-label">ကျပ်</label>
                            <input maxlength="10" type="text" name="previous_remain_kyat" id="previous_remain_kyat" class="form-control previous_remain_kyat">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('previous_remain_kyat')) <span class="help-block">{{$errors->first('previous_remain_kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('previous_remain_pal')) has-error @endif">
                            <label for="previous_remain_pal" class="control-label">ပဲ</label>
                            <input onkeyup="enterNumber()" maxlength="2" type="text" name="previous_remain_pal" id="previous_remain_pal" class="form-control previous_remain_pal">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('previous_remain_pal')) <span class="help-block">{{$errors->first('previous_remain_pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('previous_remain_yae')) has-error @endif">
                            <label for="previous_remain_yae" class="control-label">ရွေး</label>
                            <input onkeyup="enterNumber()"  type="text" name="previous_remain_yae" id="previous_remain_yae" class="form-control previous_remain_yae">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('previous_remain_yae')) <span class="help-block">{{$errors->first('previous_remain_yae')}}</span> @endif
                        </div>
                    </div>
                    {{--<div class="col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<a href="" id="previous_remain" class="btn btn-block" style="background: #1e282c;color: white;">Calculate</a>--}}
                            {{--<button id="previous_remain" onclick="aa()"> OKok</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="before_debit" class="control-label">Total Amount</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('buy_debit_kyat')) has-error @endif">
                            <label for="buy_debit_kyat" class="control-label">ကျပ်</label>
                            <input maxlength="10" type="text" name="buy_debit_kyat" id="buy_debit_kyat" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('buy_debit_kyat')) <span class="help-block">{{$errors->first('buy_debit_kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('buy_debit_pal')) has-error @endif">
                            <label for="buy_debit_pal" class="control-label">ပဲ</label>
                            <input onkeyup="enterNumber()" maxlength="2" type="text" name="buy_debit_pal" id="buy_debit_pal" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('buy_debit_pal')) <span class="help-block">{{$errors->first('buy_debit_pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('buy_debit_yae')) has-error @endif">
                            <label for="buy_debit_yae" class="control-label">ရွေး</label>
                            <input onkeyup="enterNumber()" type="text" name="buy_debit_yae" id="buy_debit_yae" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('buy_debit_yae')) <span class="help-block">{{$errors->first('buy_debit_yae')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="before_debit" class="control-label" style="font-size: 20px">ယခုပေးချေရမည့်ပမာဏ</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('payment_kyat')) has-error @endif">
                            <label for="payment_kyat" class="control-label">ကျပ်</label>
                            <input maxlength="10" type="text" name="payment_kyat" id="payment_kyat" class="form-control pc23">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('payment_kyat')) <span class="help-block">{{$errors->first('payment_kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('payment_pal')) has-error @endif">
                            <label for="payment_pal" class="control-label">ပဲ</label>
                            <input maxlength="2" onkeyup="enterNumber()" type="text" name="payment_pal" id="payment_pal" class="form-control pc24">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('payment_pal')) <span class="help-block">{{$errors->first('payment_pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('payment_yae')) has-error @endif">
                            <label for="payment_yae" class="control-label">ရွေး</label>
                            <input onkeyup="enterNumber()" maxlength="4" type="text" name="payment_yae" id="payment_yae" class="form-control pc25">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('payment_yae')) <span class="help-block">{{$errors->first('payment_yae')}}</span> @endif
                        </div>
                    </div>
                    {{--<div class="col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<a href="" class="btn btn-block" style="background: #1e282c;color: white;">Calculate</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="before_debit" class="control-label" style="font-size: 20px">ယခုလက်ကျန်ပမာဏ</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('now_remain_kyat')) has-error @endif">
                            <label for="now_remain_kyat" class="control-label">ကျပ်</label>
                            <input onkeyup="enterNumber()" maxlength="10" type="text" name="now_remain_kyat" id="now_remain_kyat" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('now_remain_kyat')) <span class="help-block">{{$errors->first('now_remain_kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('now_remain_pal')) has-error @endif">
                            <label for="now_remain_pal" class="control-label">ပဲ</label>
                            <input maxlength="2" type="text" name="now_remain_pal" id="now_remain_pal" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('now_remain_pal')) <span class="help-block">{{$errors->first('now_remain_pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('now_remain_yae')) has-error @endif">
                            <label for="now_remain_yae" class="control-label">ရွေး</label>
                            <input onkeyup="enterNumber()" maxlength="4" type="text" name="now_remain_yae" id="now_remain_yae" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('now_remain_yae')) <span class="help-block">{{$errors->first('now_remain_yae')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="before_debit" class="control-label" style="font-size: 20px">စုစုပေါင်းအလျော့</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_ayot_kyat')) has-error @endif">
                            <label for="total_ayot_kyat" class="control-label">ကျပ်</label>
                            <input  type="text" name="total_ayot_kyat" id="total_ayot_kyat" class="form-control pc2">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_ayot_kyat')) <span class="help-block">{{$errors->first('total_ayot_kyat')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_ayot_pal')) has-error @endif">
                            <label for="total_ayot_pal" class="control-label">ပဲ</label>
                            <input onkeyup="enterNumber()" type="text" name="total_ayot_pal" id="total_ayot_pal" class="form-control pc3">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_ayot_pal')) <span class="help-block">{{$errors->first('total_ayot_pal')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback @if($errors->has('total_ayot_yae')) has-error @endif">
                            <label for="total_ayot_yae" class="control-label">ရွေး</label>
                            <input type="text" name="total_ayot_yae" id="total_ayot_yae" class="form-control pc4">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('total_ayot_yae')) <span class="help-block">{{$errors->first('total_ayot_yae')}}</span> @endif
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group has-feedback @if($errors->has('cupon_code')) has-error @endif">
                            <label for="cupon_code" class="control-label">cupon_code</label>
                            <input type="text" name="cupon_code" id="cupon_code" class="form-control">
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('cupon_code')) <span class="help-block">{{$errors->first('cupon_code')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group has-feedback @if($errors->has('note')) has-error @endif">
                            <label for="note" class="control-label">Note</label>
                            <textarea name="note" id="note" class="form-control"></textarea>
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                            @if($errors->has('note')) <span class="help-block">{{$errors->first('note')}}</span> @endif
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 10px;">
                        <div class="form-group">
                            <button type="submit" style="background: #1e282c;color: white;" class="btn btn-block">Create</button>
                        </div>
                    </div>
                @csrf
                </form>
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

    </div>
@stop
{{--<script type="text/javascript">--}}

    {{--function enterNumber(){--}}

        {{--var e = document.getElementById('previous_remain_yae');--}}
        {{--var w = document.getElementById('bye_debit_yae');--}}
        {{--var r = document.getElementById('payment_yae');--}}
        {{--var y = document.getElementById('now_remain_yae');--}}
        {{--var t = document.getElementById('total_ayot_yae');--}}


        {{--// if (!/^[0-8]+$/.test(e.value))--}}
        {{--// {--}}
        {{--//     alert("Please enter onyl number.");--}}
        {{--//     e.value = e.value.substring(0,e.value.length-1);--}}
        {{--// }--}}
        {{--// if (!/^[0-7.99]+$/.test(w.value))--}}
        {{--// {--}}
        {{--//     w.value = w.value.substring(0,w.value.length-1);--}}
        {{--// }--}}
        {{--// if (!/^[0-7.99]+$/.test(r.value))--}}
        {{--// {--}}
        {{--//     r.value = r.value.substring(0,r.value.length-1);--}}
        {{--// }--}}
        {{--// if (!/^[0-7.99]+$/.test(y.value))--}}
        {{--// {--}}
        {{--//     y.value = y.value.substring(0,y.value.length-1);--}}
        {{--// }--}}
        {{--// if (!/^[0-7.99]+$/.test(t.value))--}}
        {{--// {--}}
        {{--//     t.value = t.value.substring(0,t.value.length-1);--}}
        {{--// }--}}

    {{--}--}}

{{--</script>--}}
@section('script')

@stop