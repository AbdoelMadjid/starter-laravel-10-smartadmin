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
        Schema::create('data_gurus', function (Blueprint $table) {
            $table->char('id_guru', 20)->primary();
            $table->char('nip', 50)->nullable();
            $table->string('gelardepan', 15)->nullable();
            $table->string('namalengkap', 100);
            $table->string('gelarbelakang', 15)->nullable();
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('jenisguru', ['Kepala Sekolah', 'Produktif', 'Umum', 'BP/BK', 'Tata Usaha']);
            $table->string('tempatlahir', 30)->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('agama', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('nomorhp', 100)->nullable();
            $table->string('photo', 200)->nullable();
            $table->text('motto')->nullable()->nullable();
            $table->string('alamat_dusun', 50)->nullable();
            $table->string('alamat_jalan', 50)->nullable();
            $table->char('alamat_norumah', 3)->nullable();
            $table->char('alamat_rt', 3)->nullable();
            $table->char('alamat_rw', 3)->nullable();
            $table->string('alamat_desa', 50)->nullable();
            $table->string('alamat_kec', 50)->nullable();
            $table->string('alamat_kab', 50)->nullable();
            $table->char('alamat_kodepos', 7)->nullable();
            $table->enum('aktif', ['Aktif', 'Tidak Aktif', 'Pensiun', 'Pindah', 'Keluar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_gurus');
    }
};
