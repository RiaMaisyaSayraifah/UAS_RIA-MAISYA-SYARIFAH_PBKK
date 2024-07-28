<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewa';

    protected $fillable = [
        'penyewa_id',
        'kendaraan_id',
        'tanggal_sewa',
        'tanggal_kembali',
    ];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
