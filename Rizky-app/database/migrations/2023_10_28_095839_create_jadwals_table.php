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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->char('kode_matakuliah', 8);
            $table->char('nidn', 10);
            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliahs');
            $table->foreign('nidn')->references('nidn')->on('dosens');
            $table->char('kelas', 1);
            $table->string('hari', 10);
            $table->timestamp('jam');
            $table->timestamps();
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
