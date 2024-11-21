<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->date('date');
            $table->string('keterangan');
            $table->string('deskripsi')->nullable();
            $table->timestamps();
            
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade'); 
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trackings');
    }
    
};
