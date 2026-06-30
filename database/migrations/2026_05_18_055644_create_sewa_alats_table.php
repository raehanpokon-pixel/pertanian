<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sewa_alats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('foto');
            $table->text('deskripsi')->nullable();
            $table->integer('harga_per_hari');
            $table->enum('status', ['Tersedia', 'Dipesan'])
                  ->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sewa_alats');
    }
};