<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_kategori_id',
        'produk_nama',
        'produk_harga',
        'produk_qty',
        'produk_detail',
        'produk_is_active',
    ];

    public function kategori(){
        return $this->belongsTo(kategoriProduk::class, 'produk_kategori_id', 'id');
    }

    public function thumbs(){
        return $this->hasMany(ProdukThumb::class, 'produk_id');
    }
}
