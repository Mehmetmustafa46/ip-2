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
        Schema::create('otelresimleri', function (Blueprint $table) {
            $table->id('ResimID');
            $table->unsignedBigInteger('OtelID');
            $table->string('ResimYolu', 255)->nullable();
            $table->foreign('OtelID')->references('OtelID')->on('oteller')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('otelresimleris');
    }
};
