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
        Schema::create('mahasiswas', function (Blueprint $tmhs) {
            $tmhs->id();
            $tmhs->primary('npm', 10);
            $tmhs->foreign('nidn')->references('nidn')->on('dosens')->onDelete('cascade');;
            $tmhs->string('nama', 50);
            $tmhs->timestamps();
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
