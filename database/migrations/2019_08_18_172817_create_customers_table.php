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
            $table->string('name');
            $table->string('user_name');
            $table->string('dob');
            $table->text('address');
            $table->string('phone_number');
            $table->string('shop_name');
            $table->string('town')   ;
            $table->text('nrc');
            $table->text('path');
            $table->text('profile');
            $table->text('debit_kyat');
            $table->text('debit_pal');
            $table->text('debit_yae');
            $table->text('password');
            $table->text('status');
            $table->text('total_point');
            $table->text('voucher');
            $table->text('s_name');
            $table->text('s_date');
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
