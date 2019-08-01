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
            $table->string('shop')->default(null);
            $table->string('customer_name')->default(null);
            $table->string('sale_name')->default(null);
            $table->date('date')->default(null);
            $table->string('invoice_number')->default(null);
            $table->integer('quantity')->default(null);
            $table->float('select_point')->default(null);
            $table->integer('point')->default(null);
            $table->string('kyat')->default(null);
            $table->string('pal')->default(null);
            $table->string('ywaw')->default(null);
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
        Schema::dropIfExists('invoices');
    }
}
