<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriJasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_jasa_nama',
        'kategori_jasa_is_active',
    ];
}
