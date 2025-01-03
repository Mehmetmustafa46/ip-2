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
        Schema::create('seyahatresimleri', function (Blueprint $table) {
            $table->id('ResimID');
            $table->unsignedBigInteger('SeyahatID');
            $table->string('ResimYolu', 255)->nullable();
            $table->foreign('SeyahatID')->references('SeyahatID')->on('seyahatler')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('seyahatresimleris');
    }
};
