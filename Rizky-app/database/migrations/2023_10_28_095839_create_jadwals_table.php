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
        Schema::create('jadwals', function (Blueprint $tjdw) {
            $tjdw->id();
            $tjdw->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliahs')->onDelete('cascade');;
            $tjdw->char('nidn', 10);
            $tjdw->char('kelas', 1);
            $tjdw->string('hari', 10);
            $tjdw->timestamps('jam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
