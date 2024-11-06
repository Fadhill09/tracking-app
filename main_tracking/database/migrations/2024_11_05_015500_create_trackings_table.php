<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pengirim');
        $table->string('no_hp_pengirim');
        $table->text('alamat_pengirim');
        $table->string('nama_penerima');
        $table->string('no_hp_penerima');
        $table->text('alamat_penerima');
        $table->string('nama_barang');
        $table->integer('jumlah_barang');
        $table->enum('jenis_pengiriman', ['reguler', 'cepat']);
        $table->decimal('biaya_pengiriman', 10, 2);
        $table->text('pesan_pengirim')->nullable();
        $table->timestamps();
    });
    
    }

    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
