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
        Schema::create('seyahatrezervasyonlar', function (Blueprint $table) {
            $table->id('RezervasyonID');
            $table->unsignedBigInteger('MusteriID');
            $table->unsignedBigInteger('TurID');
            $table->date('RezervasyonTarihi')->nullable();
            $table->decimal('ToplamTutar', 10, 2)->nullable();
            $table->foreign('MusteriID')->references('MusteriID')->on('musteriler')->onDelete('cascade');
            $table->foreign('TurID')->references('TurID')->on('turlar')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('seyahatrezervasyonlars');
    }
};
