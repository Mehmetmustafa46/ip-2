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
        Schema::create('kullanici', function (Blueprint $table) {
            $table->id('KullaniciID');
            $table->string('KullaniciAdi', 50)->unique();
            $table->string('SifreHash', 255);
            $table->string('Ad', 50)->nullable();
            $table->string('Soyad', 50)->nullable();
            $table->string('Email', 100)->unique()->nullable();
            $table->string('Telefon', 15)->nullable();
            $table->enum('Rol', ['Musteri', 'Yonetici', 'Admin'])->default('Musteri');
            $table->date('KayitTarihi')->default(DB::raw('CURRENT_DATE'))->nullable();
            $table->unsignedBigInteger('RolID')->nullable();
            $table->foreign('RolID')->references('RolID')->on('roller')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kullanicis');
    }
};
