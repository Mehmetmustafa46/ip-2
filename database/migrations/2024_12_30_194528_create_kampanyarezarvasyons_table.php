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
        Schema::create('kampanyarezervasyon', function (Blueprint $table) {
            $table->id('KampanyaRezervasyonID');
            $table->unsignedBigInteger('KampanyaID');
            $table->unsignedBigInteger('RezervasyonID');
            $table->foreign('KampanyaID')->references('KampanyaID')->on('kampanyalar')->onDelete('cascade');
            $table->foreign('RezervasyonID')->references('RezervasyonID')->on('rezervasyonlar')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kampanyarezarvasyons');
    }
};
