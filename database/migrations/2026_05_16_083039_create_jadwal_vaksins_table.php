<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_vaksins', function (Blueprint $table) {
            $table->id();

            $table->string('nama_vaksin');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('lokasi');
            $table->text('deskripsi')->nullable();
            $table->string('status')->default('Akan Datang');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_vaksins');
    }
};