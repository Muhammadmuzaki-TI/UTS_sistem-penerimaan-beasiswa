<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'dokumen_mahasiswa';
    protected $primaryKey = 'dokumen_id';

    protected $fillable = [
        'mahasiswa_id', 'jenis_dokumen', 'nama_dokumen', 
        'tanggal_upload', 'path_dokumen'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }
}
