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
        Schema::create('krs', function (Blueprint $tkrs) {
            $tkrs->id();
            $tkrs->foreign('npm')->references('npm')->on('mahasiswas')->onDelete('cascade');
            $tkrs->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliahs')->onDelete('cascade');;
            $tkrs->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
