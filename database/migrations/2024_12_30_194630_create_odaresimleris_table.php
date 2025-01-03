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
        Schema::create('odaresimleri', function (Blueprint $table) {
            $table->id('ResimID');
            $table->unsignedBigInteger('OdaID');
            $table->string('ResimYolu', 255)->nullable();
            $table->foreign('OdaID')->references('OdaID')->on('odalar')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('odaresimleris');
    }
};
