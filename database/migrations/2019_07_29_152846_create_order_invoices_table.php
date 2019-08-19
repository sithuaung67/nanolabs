<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucher_number')->default(null);
            $table->string('sale_user_name')->default(null);
            $table->string('customer_id')->default(null);
            $table->string('order_date')->default(null);
            $table->string('qty')->default(0);
            $table->string('normal')->default(0);
            $table->string('point_eight')->default(0);
            $table->string('total_point')->default(0);
            $table->string('kyat')->default(0);
            $table->string('pal')->default(0);
            $table->string('yae')->default(0);
            $table->string('gram')->default(0);
            $table->string('cupon_code')->default(0);
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
        Schema::dropIfExists('order_invoices');
    }
}
