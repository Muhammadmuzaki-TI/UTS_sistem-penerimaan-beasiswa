<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswa'; // Nama tabel di database
    protected $primaryKey = 'beasiswa_id'; // Primary key tabel

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'nama_beasiswa',
        'jenis_beasiswa',
        'keterangan',
        'nilai_beasiswa'
    ];

    // Relasi satu ke banyak dengan PenerimaBeasiswa
    public function penerimaBeasiswa()
    {
        return $this->hasMany(PenerimaBeasiswa::class, 'beasiswa_id');
    }

    // Relasi satu ke banyak dengan KriteriaBeasiswa
    public function kriteriaBeasiswa()
    {
        return $this->hasMany(KriteriaBeasiswa::class, 'beasiswa_id');
    }

    // Relasi satu ke banyak dengan RiwayatPengajuan
    public function riwayatPengajuan()
    {
        return $this->hasMany(RiwayatPengajuan::class, 'beasiswa_id');
    }

    // Jika Anda ingin menambahkan metode untuk mengakses data terkait
    public function getJumlahPenerimaAttribute()
    {
        return $this->penerimaBeasiswa()->count(); // Menghitung jumlah penerima beasiswa
    }

    // Jika Anda ingin mendapatkan kriteria beasiswa dalam bentuk array
    public function getKriteriaListAttribute()
    {
        return $this->kriteriaBeasiswa()->pluck('kriteria')->toArray(); // Mengembalikan array kriteria
    }
}
