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
        Schema::create('program_keahlians', function (Blueprint $table) {
            $table->char('kode_program', 20)->primary();
            $table->char('kode_bidang', 20);
            $table->string('nama_program');
            $table->timestamps();

            $table->foreign('kode_bidang')->references('kode_bidang')->on('bidang_keahlians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_keahlians', function (Blueprint $table) {
            $table->dropForeign(['kode_bidang']);
        });
        Schema::dropIfExists('program_keahlians');
    }
};
