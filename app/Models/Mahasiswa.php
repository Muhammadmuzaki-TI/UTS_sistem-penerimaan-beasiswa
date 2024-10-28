<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id';

    protected $fillable = [
        'nama_lengkap', 'nim', 'tanggal_lahir', 'alamat', 
        'telepon', 'email', 'fakultas', 'jurusan', 'semester'
    ];

    public function penerimaBeasiswa()
    {
        return $this->hasMany(PenerimaBeasiswa::class, 'mahasiswa_id');
    }

    public function dokumenMahasiswa()
    {
        return $this->hasMany(DokumenMahasiswa::class, 'mahasiswa_id');
    }

    public function riwayatPengajuan()
    {
        return $this->hasMany(RiwayatPengajuan::class, 'mahasiswa_id');
    }
}
