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
        Schema::create('rezervasyonlar', function (Blueprint $table) {
            $table->id('RezervasyonID');
            $table->unsignedBigInteger('MusteriID');
            $table->enum('RezervasyonTipi', ['Otel', 'Seyahat'])->nullable();
            $table->unsignedBigInteger('IlgiliID')->nullable();
            $table->date('RezervasyonTarihi')->nullable();
            $table->decimal('ToplamTutar', 10, 2)->nullable();
            $table->enum('Durum', ['Beklemede', 'Onaylandı', 'Iptal Edildi'])->nullable();
            $table->foreign('MusteriID')->references('MusteriID')->on('musteriler')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('rezervasyonlars');
    }
};
