<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewa';
    protected $primaryKey = 'id_sewa';

    protected $fillable = [
        'no_pol',
        'tgl_sewa',
        'tgl_selesai',
        'tlp_tujuan',
        'alamat_tujuan',
        'biaya_sewa',
        'kota',
        'id_penyewa',
        'jumlah_penumpang',
        'id_kwitansi',
    ];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol');
    }

    public function kwitansi()
    {
        return $this->belongsTo(Kwitansi::class, 'id_kwitansi');
    }
}
