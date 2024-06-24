<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';


    protected $fillable = [
        'id_user',
        'id_layanan',
        'keluhan',
        'kode_pemesanan',
        'total_harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pemesanan');
    }
}
