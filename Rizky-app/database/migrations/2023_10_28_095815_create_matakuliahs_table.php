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
        Schema::create('matakuliahs', function (Blueprint $tmatkul) {
            $tmatkul->id();
            $tmatkul->primary('kode_matakuliah', 8);
            $tmatkul->string('nama_matakuliah', 50);
            $tmatkul->integer('sks');
            $tmatkul->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};
