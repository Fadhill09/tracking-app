<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->unsignedBigInteger('tracking_id')->nullable()->after('id');
            $table->foreign('tracking_id')->references('id')->on('trackings')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropForeign(['tracking_id']);
            $table->dropColumn('tracking_id');
        });
    }
    
};
