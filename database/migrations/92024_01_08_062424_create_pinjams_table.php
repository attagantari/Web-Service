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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_buku');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            
            $table->foreign('id_buku')->references('id')->on('bukus');
            $table->foreign('id_anggota')->references('id')->on('anggotas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjams');
    }
};
