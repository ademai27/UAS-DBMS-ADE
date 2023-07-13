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
        Schema::create('t_bagian_ad', function (Blueprint $table) {
            $table->String('Bagian_ID','10');
            $table->String('Nama_Bagian','45');
            $table->String('Kepala_Bagian','45');
            $table->String('Telp','45');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagian_ad');
    }
};
