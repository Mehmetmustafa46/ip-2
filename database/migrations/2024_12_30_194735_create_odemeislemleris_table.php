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
        Schema::create('odemeislemleri', function (Blueprint $table) {
            $table->id('OdemeID');
            $table->unsignedBigInteger('RezervasyonID');
            $table->date('OdemeTarihi')->nullable();
            $table->decimal('Tutar', 10, 2)->nullable();
            $table->string('OdemeTipi', 50)->nullable();
            $table->foreign('RezervasyonID')->references('RezervasyonID')->on('rezervasyonlar')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('odemeislemleris');
    }
};
