<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('jadwal_vaksins', function (Blueprint $table) {
            $table->string('desa')->after('lokasi');
        });
    }

    public function down(): void
    {
        Schema::table('jadwal_vaksins', function (Blueprint $table) {
            $table->dropColumn('desa');
        });
    }
};