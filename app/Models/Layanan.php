<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = [
        'nama_layanan',
        'deskripsi_layanan',
        'harga_layanan',
        'foto_layanan',
        'status_layanan',
        'jenis_layanan',
    ];

    public function jenis_layanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'jenis_layanan');
    }
}
