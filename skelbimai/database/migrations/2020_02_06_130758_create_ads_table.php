<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->string('pavadinimas');
            $table->string('nuotrauka')->nullable; //kelias
            $table->longText('aprasymas');
            $table->decimal('price');
            $table->string('e-mail');
            $table->string('phone')->nullable;
            $table->string('location');
            $table->integer('catid');
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
        Schema::dropIfExists('ads');
    }
}
