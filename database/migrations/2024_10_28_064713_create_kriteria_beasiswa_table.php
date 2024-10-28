<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaBeasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('kriteria_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beasiswa_id')->constrained('beasiswa')->onDelete('cascade');
            $table->string('nama_kriteria', 100);
            $table->decimal('nilai_minimum', 5, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria_beasiswa');
    }
}
