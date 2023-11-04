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
        Schema::create('books', function (Blueprint $table) {
            $table->bigInteger('id', 20)->primary();
            $table->char('title', 255);
            $table->char('author', 255);
            $table->year('year');
            $table->char('publisher', 255);
            $table->char('city', 255);
            $table->char('cover', 255);
            $table->bigInteger('bookshelf_id', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
