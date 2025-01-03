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
        Schema::create('seyahatler', function (Blueprint $table) {
            $table->id('SeyahatID');
            $table->string('SeyahatAdi', 100)->nullable();
            $table->date('BaslangicTarihi')->nullable();
            $table->date('BitisTarihi')->nullable();
            $table->string('Bolge', 50)->nullable();
            $table->text('Aciklama')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('seyahatlars');
    }
};
