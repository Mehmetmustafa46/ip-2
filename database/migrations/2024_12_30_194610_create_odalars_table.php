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
        Schema::create('odalar', function (Blueprint $table) {
            $table->id('OdaID');
            $table->unsignedBigInteger('OtelID');
            $table->string('OdaTipi', 50)->nullable();
            $table->decimal('Fiyat', 10, 2)->nullable();
            $table->enum('Durum', ['Uygun', 'Rezerve'])->nullable();
            $table->foreign('OtelID')->references('OtelID')->on('oteller')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('odalars');
    }
};
