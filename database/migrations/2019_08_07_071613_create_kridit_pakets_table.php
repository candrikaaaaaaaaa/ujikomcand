<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriditPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kridit_pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_paket');
            $table->double('paket_hargacash');
            $table->double('paket_uangmuka');
            $table->bigInteger('paket_jumlahcicilan');
            $table->double('paket_bunga');
            $table->double('paket_nilaicicilan');
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
        Schema::dropIfExists('kridit_pakets');
    }
}
