<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_pengeluaranitem_ad', function (Blueprint $table) {
            $table->String('ID');
            $table->String('No_BK','10');
            $table->String('Barang_ID','10');
            $table->Integer('Jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaranitem_ad');
    }
};
