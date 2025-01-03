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
        Schema::create('turrehberleri', function (Blueprint $table) {
            $table->id('RehberID');
            $table->string('Ad', 50)->nullable();
            $table->string('Soyad', 50)->nullable();
            $table->string('Telefon', 15)->nullable();
            $table->string('Email', 100)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('turrehberleris');
    }
};
