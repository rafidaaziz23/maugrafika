<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukThumb extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'thumb',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
}
