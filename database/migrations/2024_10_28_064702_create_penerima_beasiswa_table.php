<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaBeasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('penerima_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('beasiswa_id')->constrained('beasiswa')->onDelete('cascade');
            $table->date('tanggal_diterima')->nullable();
            $table->enum('status', ['Aktif', 'Selesai', 'Dibatalkan'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerima_beasiswa');
    }
}
