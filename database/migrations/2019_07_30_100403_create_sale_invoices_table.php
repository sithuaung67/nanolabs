<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_invoices', function (Blueprint $table) {
            $table->increments('sale_invoice_id');
            $table->string('sale_user_name');
            $table->string('voucher_number');
            $table->string('sale_date');
            $table->string('total_kyat');
            $table->string('total_pal');
            $table->string('total_yae');
            $table->string('qty');
            $table->string('point_eight');
            $table->string('kyat');
            $table->string('pal');
            $table->string('yae');
            $table->string('gram');
            $table->string('cupon_code');
            $table->string('customer_id');
            $table->string('previous_remain_kyat');
            $table->string('previous_remain_pal');
            $table->string('previous_remain_yae');
            $table->string('buy_debit_kyat');
            $table->string('buy_debit_pal');
            $table->string('buy_debit_yae');
            $table->string('return_gold_kyat');
            $table->string('return_gold_pal');
            $table->string('return_gold_yae');
            $table->string('net_pay_kayt');
            $table->string('net_pay_pal');
            $table->string('net_pay_yae');
            $table->string('payment_kyat');
            $table->string('payment_pal');
            $table->string('payment_yae');
            $table->string('now_remain_kyat');
            $table->string('now_remain_pal');
            $table->string('now_remain_yae');
            $table->string('note');
            $table->string('return_gram');
            $table->string('now_remain_gram');
            $table->string('sub_return_kyat');
            $table->string('sub_return_pal');
            $table->string('sub_return_yae');

            $table->string('return_quantity');
            $table->string('now_remain_quantity');
            $table->string('now_remain_pointeight');
            $table->string('return_ayot_kyat');
            $table->string('return_ayot_pal');
            $table->string('return_ayot_yae');
            $table->string('now_total_ayot_kyat');
            $table->string('now_total_ayot_pal');
            $table->string('now_total_ayot_yae');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_invoices');
    }
}
