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
        Schema::create('turrehberatama', function (Blueprint $table) {
            $table->id('AtamaID');
            $table->unsignedBigInteger('TurID');
            $table->unsignedBigInteger('RehberID');
            $table->foreign('TurID')->references('TurID')->on('turlar')->onDelete('cascade');
            $table->foreign('RehberID')->references('RehberID')->on('turrehberleri')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('turrehberatamas');
    }
};
