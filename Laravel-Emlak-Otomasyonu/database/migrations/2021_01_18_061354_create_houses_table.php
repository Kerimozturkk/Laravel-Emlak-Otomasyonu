<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->integer('ev_no');
            $table->string('adres');
            $table->integer('oda_sayisi');
            $table->integer('metrekare');
            $table->integer('kat');
            $table->integer('fiyat');
            $table->string('sahip_ad');
            $table->string('sahip_soyad');
            $table->string('sahip_gsm');
            $table->string('sahip_email');
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
        Schema::dropIfExists('houses');
    }
}
