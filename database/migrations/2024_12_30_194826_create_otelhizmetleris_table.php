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
        Schema::create('otelhizmetleri', function (Blueprint $table) {
            $table->id('HizmetID');
            $table->unsignedBigInteger('OtelID');
            $table->string('HizmetAdi', 100)->nullable();
            $table->text('Aciklama')->nullable();
            $table->foreign('OtelID')->references('OtelID')->on('oteller')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('otelhizmetleris');
    }
};
