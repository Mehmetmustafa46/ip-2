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
        Schema::create('oteller', function (Blueprint $table) {
            $table->id('OtelID');
            $table->string('OtelAdi', 100)->nullable();
            $table->string('Lokasyon', 100)->nullable();
            $table->integer('YildizSayisi')->nullable();
            $table->text('Aciklama')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('otellers');
    }
};
