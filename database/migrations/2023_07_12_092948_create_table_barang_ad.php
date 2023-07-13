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
        Schema::create('t_barang_ad', function (Blueprint $table) {
            $table->String('Barang_ID','10');
            $table->String('Nama_Barang','45');
            $table->String('Satuan','45');
            $table->String('Harga','45');
            $table->String('Kategori_ID','45');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barang_ad');
    }
};
