<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'jasa_kategori_id',
        'jasa_nama',
        'jasa_harga',
        'jasa_detail',
        'jasa_is_active',
    ];

    public function kategori(){
        return $this->belongsTo(kategoriJasa::class, 'jasa_kategori_id', 'id');
    }

    public function thumbs(){
        return $this->hasMany(JasaThumb::class, 'jasa_id');
    }
}
