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
        Schema::create('t_petugas_ad', function (Blueprint $table) {
            $table->Integer('Petugas_ID');
            $table->String('Nama_Petugas','35');
            $table->String('Alamat','45');
            $table->String('Handphone','45');
            $table->String('Password','50');
            $table->String('Level','20');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_petugas_ad');
    }
};
