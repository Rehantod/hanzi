<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Produk extends Model
{
    protected $fillable = [
        'kategori_id',
        'kode_barcode',
        'nama_produk',
        'harga_beli',
        'harga_jual',
        'stok',
        'satuan',
        'deskripsi',
        'gambar_url',
        'status',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function StokLog()
    {
        return $this->hasMany(StokLog::class, 'produk_id', 'id');
    }
}
