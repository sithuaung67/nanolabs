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
            $table->increments('id');
            $table->string('sale_user_name')->default(null);
            $table->string('voucher_number')->default(null);
            $table->string('order_date')->default(null);
            $table->string('normal')->default(0);
            $table->string('point_eight')->default(0);
            $table->string('kyat')->default(0);
            $table->string('pal')->default(0);
            $table->string('yae')->default(0);
            $table->string('gram')->default(0);
            $table->string('total_kyat')->default(0);
            $table->string('total_pal')->default(0);
            $table->string('total_yae')->default(0);
            $table->string('note')->default(0);
            $table->string('total_ayot_kyat')->default(0);
            $table->string('total_ayot_pal')->default(0);
            $table->string('total_ayot_yae')->default(0);
            $table->string('previous_remain_kyat')->default(0);
            $table->string('previous_remain_pal')->default(0);
            $table->string('previous_remain_yae')->default(0);
            $table->string('buy_debit_kyat')->default(0);
            $table->string('buy_debit_pal')->default(0);
            $table->string('buy_debit_yae')->default(0);
            $table->string('payment_kyat')->default(0);
            $table->string('payment_pal')->default(0);
            $table->string('payment_yae')->default(0);
            $table->string('now_remain_kyat')->default(0);
            $table->string('now_remain_pal')->default(0);
            $table->string('now_remain_yae')->default(0);
            $table->string('cupon_code')->default(null);
            $table->string('customer_id')->default(null);

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
