<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('dokumen_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade');
            $table->string('jenis_dokumen', 50);
            $table->string('nama_dokumen', 100);
            $table->date('tanggal_upload')->nullable();
            $table->string('path_dokumen', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokumen_mahasiswa');
    }
}
