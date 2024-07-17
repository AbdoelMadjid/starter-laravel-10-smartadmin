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
        Schema::create('profil_sekolahs', function (Blueprint $table) {
            $table->char('npsn', 10)->primary();
            $table->string('nm_sekolah');
            $table->enum('status', ['Negeri', 'Swasta']);
            $table->string('alamat_blok')->nullable();
            $table->string('alamat_no')->nullable();
            $table->string('alamat_rt')->nullable();
            $table->string('alamat_rw')->nullable();
            $table->string('alamat_desa')->nullable();
            $table->string('alamat_kec')->nullable();
            $table->string('alamat_kab')->nullable();
            $table->string('alamat_provinsi')->nullable();
            $table->string('alamat_kodepos')->nullable();
            $table->string('alamat_telepon')->nullable();
            $table->string('alamat_website')->nullable();
            $table->string('alamat_email')->nullable();
            $table->string('logo_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolahs');
    }
};
