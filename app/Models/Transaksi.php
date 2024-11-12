<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_outlet',
        'kode_invoice',
        'id_member',
        'tanggal',
        'batas_waktu',
        'tgl_bayar',
        'biaya_tambahan',
        'diskon',
        'pajak',
        'status',
        'dibayar',
        'id_user'
    ];

    protected $table = 'transaksi';

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'id_outlet', 'id');
    }
    public function member(){
        return $this->belongsTo(Outlet::class, 'id_member', 'id');
    }
    public function user(){
        return $this->belongsTo(Outlet::class, 'id_user', 'id');
    }
}
