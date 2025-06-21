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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan');
            $table->string('jenis');
            $table->string('kepemilikan');
            $table->string('nomor_polisi');
            $table->year('tahun');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);

            // Spesifikasi
            $table->string('konsumsi_bbm')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('transmisi')->nullable();

            // Servis
            $table->date('servis_terakhir')->nullable();
            $table->date('servis_berikutnya')->nullable();

            // Riwayat bisa jadi tabel terpisah jika banyak
            $table->text('riwayat_pemakaian')->nullable(); // Jika hanya ringkasan

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
