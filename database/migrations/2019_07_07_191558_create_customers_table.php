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
            $table->string('customer_name')->default(null);
            $table->string('user_name')->default(null);
            $table->string('birthday')->default(null);
            $table->text('address')->default(null);
            $table->string('phone')->default(null);
            $table->string('shop')->default(null);
            $table->string('town')->default(null)   ;
            $table->text('notification')->default(null);
            $table->text('nrc')->default(null);
            $table->text('path')->default(null);
            $table->text('profile')->default(null);
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
