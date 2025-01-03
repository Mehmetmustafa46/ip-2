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
        Schema::create('kampanyalar', function (Blueprint $table) {
            $table->id('KampanyaID');
            $table->string('KampanyaAdi', 100)->nullable();
            $table->date('BaslangicTarihi')->nullable();
            $table->date('BitisTarihi')->nullable();
            $table->decimal('IndirimOrani', 5, 2)->nullable();
            $table->enum('KampanyaTipi', ['Otel', 'Seyahat', 'Genel'])->nullable();
            $table->text('Aciklama')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kampanyalars');
    }
};
