<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_produk_nama',
        'kategori_produk_is_active',
    ];

    public function produks(){
        return $this->hasMany(Produk::class, 'produk_kategori_id');
    }
}
