<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPengajuanTable extends Migration
{
    public function up()
    {
        Schema::create('riwayat_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('beasiswa_id')->constrained('beasiswa')->onDelete('cascade');
            $table->date('tanggal_pengajuan')->nullable();
            $table->enum('status_pengajuan', ['Diterima', 'Ditolak', 'Menunggu'])->default('Menunggu');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_pengajuan');
    }
}
