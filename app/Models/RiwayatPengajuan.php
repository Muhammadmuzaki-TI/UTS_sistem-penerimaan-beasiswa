<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPengajuan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pengajuan';
    protected $primaryKey = 'riwayat_id';

    protected $fillable = [
        'mahasiswa_id', 'beasiswa_id', 'tanggal_pengajuan', 
        'status_pengajuan', 'keterangan'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }
}

