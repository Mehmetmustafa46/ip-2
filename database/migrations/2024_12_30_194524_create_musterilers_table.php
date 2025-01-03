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
        Schema::create('musteriler', function (Blueprint $table) {
            $table->id('MusteriID');
            $table->string('Ad', 50)->nullable();
            $table->string('Soyad', 50)->nullable();
            $table->string('Eposta', 100)->unique()->nullable();
            $table->string('Telefon', 15)->nullable();
            $table->date('KayitTarihi')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('musterilers');
    }
};
