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
            $table->string('shop')->default(null);
            $table->string('customer_name')->default(null);
            $table->string('sale_name')->default(null);
            $table->date('date')->default(null);
            $table->string('order_number')->default(null);
            $table->integer('quantity')->default(null);
            $table->float('select_point')->default(null);
            $table->integer('point')->default(null);
            $table->string('kyat')->default(null);
            $table->string('pae')->default(null);
            $table->string('yway')->default(null);
            $table->string('gram')->default(null);
            $table->string('coupon')->default(null);
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
