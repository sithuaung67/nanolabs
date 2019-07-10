<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop');
            $table->string('customer_name');
            $table->string('sale_name');
            $table->date('date');
            $table->string('invoice_number');
            $table->integer('quantity');
            $table->float('select_point');
            $table->integer('point');
            $table->string('kyat');
            $table->string('pal');
            $table->string('ywaw');
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
        Schema::dropIfExists('invoices');
    }
}
