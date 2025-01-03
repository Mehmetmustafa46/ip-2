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
        Schema::create('seyahatulasim', function (Blueprint $table) {
            $table->id('UlasimID');
            $table->unsignedBigInteger('SeyahatID');
            $table->string('UlasimTipi', 50)->nullable();
            $table->decimal('Fiyat', 10, 2)->nullable();
            $table->foreign('SeyahatID')->references('SeyahatID')->on('seyahatler')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('seyahatulasims');
    }
};
