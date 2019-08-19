<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default(null);
            $table->string('user_name')->default(null);
            $table->string('dob')->default(null);
            $table->text('address')->default(null);
            $table->string('phone_number')->default(null);
            $table->string('shop_name')->default(null);
            $table->string('town')->default(null)   ;
            $table->text('nrc')->default(null);
            $table->text('path')->default(null);
            $table->text('profile')->default(null);
            $table->text('debit_kyat')->default(null);
            $table->text('debit_pal')->default(null);
            $table->text('debit_yae')->default(null);
            $table->text('password')->default(null);
            $table->text('status')->default(null);
            $table->text('voucher_number')->default(null);
            $table->text('sale_name')->default(null);
            $table->text('sale_date')->default(null);
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
        Schema::dropIfExists('customers');
    }
}
