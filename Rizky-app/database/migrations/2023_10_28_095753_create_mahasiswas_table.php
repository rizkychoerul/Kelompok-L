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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->char('npm', 10)->primary();
            $table->char('nidn', 10);
            $table->string('nama', 50);
            $table->timestamp('arrived_at');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nidn')->references('nidn')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
