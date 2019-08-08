<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_cash');
            $table->bigInteger('No_KTP')->unsigned();
            $table->foreign('No_KTP')->references('id')->on('beli_cashes');
            $table->bigInteger('kode_motor')->unsigned();
            $table->foreign('kode_motor')->references('id')->on('beli_cashes');
            $table->date('tanggal_cash');
            $table->double('bayar_cash');
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
        Schema::dropIfExists('beli_cashes');
    }
}
