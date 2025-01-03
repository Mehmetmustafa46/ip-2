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
        Schema::create('odahizmetleri', function (Blueprint $table) {
            $table->id('OdaHizmetID');
            $table->unsignedBigInteger('OdaID');
            $table->string('HizmetAdi', 100)->nullable();
            $table->text('Aciklama')->nullable();
            $table->foreign('OdaID')->references('OdaID')->on('odalar')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('odahizmetleris');
    }
};
