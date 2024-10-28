<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'penerima_beasiswa';
    protected $primaryKey = 'penerima_id';

    protected $fillable = [
        'mahasiswa_id', 'beasiswa_id', 'tanggal_diterima', 'status'
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
