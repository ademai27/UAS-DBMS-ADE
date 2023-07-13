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
        Schema::create('t_pengeluaran_ad', function (Blueprint $table) {
            $table->String('No_BK','10');
            $table->String('Tanggal');
            $table->String('No_Reff');
            $table->String('Bagian_ID','10');
            $table->String('Petugas_ID','5');
            $table->String('Keterangan','50');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaran_ad');
    }
};
