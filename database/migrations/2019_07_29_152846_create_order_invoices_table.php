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
            $table->string('sale_user_name')->default(null);
            $table->string('voucher_number')->default(null);
            $table->string('order_date')->default(null);
            $table->string('qty')->default(0);
            $table->string('point_eight')->default(0);
            $table->string('total_point')->default(0);
            $table->string('kyat')->default(null);
            $table->string('pal')->default(null);
            $table->string('yae')->default(null);
            $table->string('gram')->default(0);
            $table->string('cupon_code')->default(null);
            $table->string('customer_id')->default(null);
            $table->string('ring')->default(null);
            $table->string('ring_number')->default(null);
            $table->string('ring_point_eight')->default(null);
            $table->string('ring_kyat')->default(null);
            $table->string('ring_pal')->default(null);
            $table->string('ring_yae')->default(null);
            $table->string('bangles')->default(null);
            $table->string('bangles_number')->default(null);
            $table->string('bangles_point_eight')->default(null);
            $table->string('bangles_kyat')->default(null);
            $table->string('bangles_pal')->default(null);
            $table->string('bangles_yae')->default(null);
            $table->string('necklace')->default(null);
            $table->string('necklace_number')->default(null);
            $table->string('necklace_point_eight')->default(null);
            $table->string('necklace_kyat')->default(null);
            $table->string('necklace_pal')->default(null);
            $table->string('necklace_yae')->default(null);
            $table->string('earring')->default(null);
            $table->string('earring_number')->default(null);
            $table->string('earring_point_eight')->default(null);
            $table->string('earring_kyat')->default(null);
            $table->string('earring_pal')->default(null);
            $table->string('earring_yae')->default(null);
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
