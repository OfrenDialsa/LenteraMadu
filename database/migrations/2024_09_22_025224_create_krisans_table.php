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
        Schema::create('krisans', function (Blueprint $table) {
            $table->id();
            $table->string('user')->default('Warga');
            $table->string('judul');
            $table->string('aduan');
            $table->string('status')->default('Belum ditanggapi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krisans');
    }
};
