<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokLog extends Model
{
    protected $table = 'stok_logs';
    protected $fillable = [
        'produk_id',
        'user_id',
        'tanggal',
        'tipe',
        'jumlah',
        'sumber',
        'keterangan',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
