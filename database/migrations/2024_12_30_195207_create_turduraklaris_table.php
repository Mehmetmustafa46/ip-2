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
        Schema::create('turduraklari', function (Blueprint $table) {
            $table->id('DurakID');
            $table->unsignedBigInteger('TurID');
            $table->string('DurakAdi', 100)->nullable();
            $table->text('Aciklama')->nullable();
            $table->foreign('TurID')->references('TurID')->on('turlar')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('turduraklaris');
    }
};
