<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'kriteria_beasiswa';
    protected $primaryKey = 'kriteria_id';

    protected $fillable = [
        'beasiswa_id', 'nama_kriteria', 'nilai_minimum', 'keterangan'
    ];

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }
}
