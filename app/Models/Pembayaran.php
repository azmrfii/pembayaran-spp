<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = [
        'petugas_id', 'siswa_id', 'tgl_bayar', 'bulan_dibayar', 'tahun_dibayar', 'spp_id', 'jumlah_bayar'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
