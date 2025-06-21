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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->foreignId('driver_id')->nullable()->constrained('drivers')->onDelete('set null');
            $table->foreignId('approver1_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('approver2_id')->nullable()->constrained('users')->onDelete('cascade');

            $table->date('tanggal_pemakaian');
            $table->integer('lama_pemakaian');
            $table->text('keperluan');

            $table->enum('status', [
                'menunggu_approver1',
                'menunggu_approver2',
                'disetujui',
                'ditolak'
            ])->default('menunggu_approver1');

            $table->timestamp('approved_at_1')->nullable();
            $table->timestamp('approved_at_2')->nullable();
            $table->text('alasan_penolakan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
