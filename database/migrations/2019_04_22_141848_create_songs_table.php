<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department');
            $table->integer('letter_no');
            $table->dateTime('date_time');
            $table->string('title');
            $table->string('main_file');
            $table->string('remark_main_file');
            $table->string('receive_file_name');
            $table->string('remark_receive_file_name');
            $table->string('attach_file');
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
        Schema::dropIfExists('songs');
    }
}
