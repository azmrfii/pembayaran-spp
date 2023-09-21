<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nisn', 'nis', 'nama', 'kelas_id', 'alamat', 'no_telp', 'spp_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
