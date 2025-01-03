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
        Schema::create('sikayetler', function (Blueprint $table) {
            $table->id('SikayetID');
            $table->unsignedBigInteger('MusteriID');
            $table->text('SikayetMetni')->nullable();
            $table->date('Tarih')->nullable();
            $table->foreign('MusteriID')->references('MusteriID')->on('musteriler')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('sikayetlers');
    }
};
