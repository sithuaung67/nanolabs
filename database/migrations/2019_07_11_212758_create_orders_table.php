<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop');
            $table->string('customer_name');
            $table->string('sale_name');
            $table->date('date');
            $table->string('order_number');
            $table->integer('quantity');
            $table->float('select_point');
            $table->integer('point');
            $table->string('kyat');
            $table->string('pae');
            $table->string('yway');
            $table->string('gram');
            $table->string('coupon');
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
        Schema::dropIfExists('orders');
    }
}
