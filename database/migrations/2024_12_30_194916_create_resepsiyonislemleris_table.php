<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('resepsiyonislemleri', function (Blueprint $table) {
            $table->id('IslemID');
            $table->unsignedBigInteger('RezervasyonID');
            $table->date('IslemTarihi')->nullable();
            $table->enum('IslemTipi', ['Check-in', 'Check-out'])->nullable();
            $table->foreign('RezervasyonID')->references('RezervasyonID')->on('otelrezervasyonlar')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('resepsiyonislemleris');
    }
};
