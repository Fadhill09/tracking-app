<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kirim', function (Blueprint $table) {
            $table->id();
            $table->string('seri'); // Kolom untuk seri
            $table->string('nama_barang'); // Kolom untuk nama barang
            $table->string('alamat'); // Kolom untuk alamat
            $table->decimal('harga', 10, 2); // Kolom untuk harga
            $table->decimal('ongkir', 10, 2); // Kolom untuk ongkir
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kirim');
    }
};
