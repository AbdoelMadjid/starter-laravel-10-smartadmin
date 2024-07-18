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
        Schema::create('biodata_ptks', function (Blueprint $table) {
            $table->string('id_guru')->primary();
            $table->unsignedBigInteger('id_user'); // Menambahkan kolom id_user untuk relasi dengan tabel users
            $table->char('nip', 50)->nullable();
            $table->string('gelardepan', 15)->nullable();
            $table->string('namalengkap', 100);
            $table->string('gelarbelakang', 15);
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('jenisguru', ['Kepala Sekolah', 'Produktif', 'Umum', 'BP/BK', 'Tata Usaha']);
            $table->string('tempatlahir', 30);
            $table->date('tanggallahir');
            $table->string('agama', 15);
            $table->string('email', 100);
            $table->string('nomorhp', 100);
            $table->string('photo', 200)->nullable();
            $table->text('motto')->nullable();
            $table->string('alamat_dusun', 50)->nullable();
            $table->string('alamat_jalan', 50)->nullable();
            $table->char('alamat_norumah', 3)->nullable();
            $table->char('alamat_rt', 3)->nullable();
            $table->char('alamat_rw', 3)->nullable();
            $table->string('alamat_desa', 50);
            $table->string('alamat_kec', 50);
            $table->string('alamat_kab', 50);
            $table->char('alamat_kodepos', 7)->nullable();
            $table->enum('aktif', ['Aktif', 'Tidak Aktif', 'Pensiun', 'Pindah', 'Keluar']);
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_ptks');
    }
};
